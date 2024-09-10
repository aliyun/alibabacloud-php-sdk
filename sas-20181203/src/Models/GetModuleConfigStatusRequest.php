<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetModuleConfigStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $moduleNames;
    protected $_name = [
        'moduleNames' => 'ModuleNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleNames) {
            $res['ModuleNames'] = $this->moduleNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetModuleConfigStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleNames'])) {
            if (!empty($map['ModuleNames'])) {
                $model->moduleNames = $map['ModuleNames'];
            }
        }

        return $model;
    }
}
