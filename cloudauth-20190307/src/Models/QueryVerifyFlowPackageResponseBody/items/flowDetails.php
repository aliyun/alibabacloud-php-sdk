<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyFlowPackageResponseBody\items;

use AlibabaCloud\Dara\Model;

class flowDetails extends Model
{
    /**
     * @var float
     */
    public $capacity;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var float
     */
    public $currCapacity;

    /**
     * @var string
     */
    public $currProportion;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $takeEffectDate;
    protected $_name = [
        'capacity' => 'Capacity',
        'commodityName' => 'CommodityName',
        'currCapacity' => 'CurrCapacity',
        'currProportion' => 'CurrProportion',
        'expireDate' => 'ExpireDate',
        'instanceName' => 'InstanceName',
        'status' => 'Status',
        'takeEffectDate' => 'TakeEffectDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }

        if (null !== $this->currProportion) {
            $res['CurrProportion'] = $this->currProportion;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->takeEffectDate) {
            $res['TakeEffectDate'] = $this->takeEffectDate;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }

        if (isset($map['CurrProportion'])) {
            $model->currProportion = $map['CurrProportion'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TakeEffectDate'])) {
            $model->takeEffectDate = $map['TakeEffectDate'];
        }

        return $model;
    }
}
