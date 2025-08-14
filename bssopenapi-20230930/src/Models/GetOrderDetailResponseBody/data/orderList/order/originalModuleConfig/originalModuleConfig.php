<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig\moduleProperties;

class originalModuleConfig extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var moduleProperties
     */
    public $moduleProperties;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'code' => 'Code',
        'moduleProperties' => 'ModuleProperties',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->moduleProperties) {
            $this->moduleProperties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->moduleProperties) {
            $res['ModuleProperties'] = null !== $this->moduleProperties ? $this->moduleProperties->toArray($noStream) : $this->moduleProperties;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ModuleProperties'])) {
            $model->moduleProperties = moduleProperties::fromMap($map['ModuleProperties']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
