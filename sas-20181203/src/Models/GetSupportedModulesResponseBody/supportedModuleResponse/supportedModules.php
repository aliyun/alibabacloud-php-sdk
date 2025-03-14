<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSupportedModulesResponseBody\supportedModuleResponse;

use AlibabaCloud\Tea\Model;

class supportedModules extends Model
{
    /**
     * @description The code of the module. Valid values:
     *
     *   **HOST**: host
     *   **CSPM**: configuration assessment
     *   **SIEM**: CloudSiem
     *   **TRIAL**: log audit
     *
     * @example HOST
     *
     * @var string
     */
    public $module;

    /**
     * @description The display name of the module.
     *
     * @example Configuration assessment
     *
     * @var string
     */
    public $moduleDisp;
    protected $_name = [
        'module' => 'Module',
        'moduleDisp' => 'ModuleDisp',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return supportedModules
     */
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
