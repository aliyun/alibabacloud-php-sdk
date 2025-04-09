<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAllTenantBindNumberBindingResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $bindingId;

    /**
     * @var string[]
     */
    public $instanceNameList;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $serializedParams;

    /**
     * @var string
     */
    public $trunkName;
    protected $_name = [
        'billingType' => 'BillingType',
        'bindingId' => 'BindingId',
        'instanceNameList' => 'InstanceNameList',
        'number' => 'Number',
        'serializedParams' => 'SerializedParams',
        'trunkName' => 'TrunkName',
    ];

    public function validate()
    {
        if (\is_array($this->instanceNameList)) {
            Model::validateArray($this->instanceNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }

        if (null !== $this->bindingId) {
            $res['BindingId'] = $this->bindingId;
        }

        if (null !== $this->instanceNameList) {
            if (\is_array($this->instanceNameList)) {
                $res['InstanceNameList'] = [];
                $n1 = 0;
                foreach ($this->instanceNameList as $item1) {
                    $res['InstanceNameList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->instanceNameList = [];
                $n1 = 0;
                foreach ($map['InstanceNameList'] as $item1) {
                    $model->instanceNameList[$n1++] = $item1;
                }
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
