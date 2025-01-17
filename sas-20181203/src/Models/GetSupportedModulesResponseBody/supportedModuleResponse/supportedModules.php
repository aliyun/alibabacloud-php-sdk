<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSupportedModulesResponseBody\supportedModuleResponse;

use AlibabaCloud\Dara\Model;

class supportedModules extends Model
{
    /**
     * @var string
     */
    public $module;
    /**
     * @var string
     */
    public $moduleDisp;
    protected $_name = [
        'module'     => 'Module',
        'moduleDisp' => 'ModuleDisp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->moduleDisp) {
            $res['ModuleDisp'] = $this->moduleDisp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['ModuleDisp'])) {
            $model->moduleDisp = $map['ModuleDisp'];
        }

        return $model;
    }
}
