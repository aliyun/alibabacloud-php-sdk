<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetModuleConfigStatusShrinkRequest extends Model
{
    /**
     * @description The service modules that you want to query.
     *
     * This parameter is required.
     * @var string
     */
    public $moduleNamesShrink;
    protected $_name = [
        'moduleNamesShrink' => 'ModuleNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleNamesShrink) {
            $res['ModuleNames'] = $this->moduleNamesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetModuleConfigStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleNames'])) {
            $model->moduleNamesShrink = $map['ModuleNames'];
        }

        return $model;
    }
}
