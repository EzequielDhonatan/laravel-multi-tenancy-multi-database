<?php

namespace App\Tenant\ManagerTenant;

use App\Models\Company\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ManagerTenant
{
    public function setConnection(Company $company)
    {
        DB::purge('tenant');

        config()->set('database.connections.tenant.database', $company->bd_database); ## BANCO DE DADOS
        config()->set('database.connections.tenant.host', $company->bd_hostname); ## NOME DO HOST
        config()->set('database.connections.tenant.username', $company->bd_username); ## USUÁRIO
        config()->set('database.connections.tenant.password', $company->bd_password); ## SENHA

        DB::reconnect('tenant');

        Schema::connection('tenant')->getConnection()->reconnect();
    }
}