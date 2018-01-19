<?php 
namespace Lsp\Api;

use Illuminate\Support\Facades\Facade;

class LspClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lspclient';
    }
}