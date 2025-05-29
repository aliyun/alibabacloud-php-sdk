<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageResponseBody\resourcePackageInfos;

use AlibabaCloud\Dara\Model;

class resourcePackageInfo extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $currCapacity;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $initCapacity;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'currCapacity' => 'CurrCapacity',
        'displayName' => 'DisplayName',
        'initCapacity' => 'InitCapacity',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
