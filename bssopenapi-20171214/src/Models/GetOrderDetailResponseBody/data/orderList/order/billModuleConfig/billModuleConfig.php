<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig\billModuleProperties;
use AlibabaCloud\Tea\Model;

class billModuleConfig extends Model
{
    /**
     * @var string
     */
    public $apiCode;

    /**
     * @var billModuleProperties
     */
    public $billModuleProperties;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'apiCode'              => 'ApiCode',
        'billModuleProperties' => 'BillModuleProperties',
        'code'                 => 'Code',
        'name'                 => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiCode) {
            $res['ApiCode'] = $this->apiCode;
        }
        if (null !== $this->billModuleProperties) {
            $res['BillModuleProperties'] = null !== $this->billModuleProperties ? $this->billModuleProperties->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billModuleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiCode'])) {
            $model->apiCode = $map['ApiCode'];
        }
        if (isset($map['BillModuleProperties'])) {
            $model->billModuleProperties = billModuleProperties::fromMap($map['BillModuleProperties']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
