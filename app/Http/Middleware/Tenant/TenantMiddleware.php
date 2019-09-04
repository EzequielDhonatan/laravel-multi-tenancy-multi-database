<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use App\Models\Company\Company;

class TenantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $company = $this->getCompany($request->getHost());

        if (!$company)
            return redirect()->route('404.tenant');
            
        

        return $next($request);
    }
    
    public function getCompany($host)
    {
        return Company::where('domain', $host)->first();
    }
}
