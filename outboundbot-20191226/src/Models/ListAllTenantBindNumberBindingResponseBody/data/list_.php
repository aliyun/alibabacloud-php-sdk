<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAllTenantBindNumberBindingResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $billingType;

    /**
     * @example b5bfb844-ce85-4779-bc8f-161fba46aa07
     *
     * @var string
     */
    public $bindingId;

    /**
     * @var string[]
     */
    public $instanceNameList;

    /**
     * @example 15005059355
     *
     * @var string
     */
    public $number;

    /**
     * @example {\"rateLimitPeriod\":\"1\",\"rateLimitCount\":\"1\"}
     *
     * @var string
     */
    public $serializedParams;

    /**
     * @var string
     */
    public $trunkName;
    protected $_name = [
        'billingType'      => 'BillingType',
        'bindingId'        => 'BindingId',
        'instanceNameList' => 'InstanceNameList',
        'number'           => 'Number',
        'serializedParams' => 'SerializedParams',
        'trunkName'        => 'TrunkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->bindingId) {
            $res['BindingId'] = $this->bindingId;
        }
        if (null !== $this->instanceNameList) {
            $res['InstanceNameList'] = $this->instanceNameList;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->serializedParams) {
            $res['SerializedParams'] = $this->serializedParams;
        }
        if (null !== $this->trunkName) {
            $res['TrunkName'] = $this->trunkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['BindingId'])) {
            $model->bindingId = $map['BindingId'];
        }
        if (isset($map['InstanceNameList'])) {
            if (!empty($map['InstanceNameList'])) {
                $model->instanceNameList = $map['InstanceNameList'];
            }
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['SerializedParams'])) {
            $model->serializedParams = $map['SerializedParams'];
        }
        if (isset($map['TrunkName'])) {
            $model->trunkName = $map['TrunkName'];
        }

        return $model;
    }
}
