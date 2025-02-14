<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckCountStatisticResponseBody\checkCountStatisticDTO;

use AlibabaCloud\Dara\Model;

class checkCountStatisticItems extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var int
     */
    public $instanceSubType;
    /**
     * @var string
     */
    public $instanceSubTypeName;
    /**
     * @var int
     */
    public $instanceType;
    /**
     * @var string
     */
    public $instanceTypeName;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $riskCount;
    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'instanceSubType'     => 'InstanceSubType',
        'instanceSubTypeName' => 'InstanceSubTypeName',
        'instanceType'        => 'InstanceType',
        'instanceTypeName'    => 'InstanceTypeName',
        'regionId'            => 'RegionId',
        'riskCount'           => 'RiskCount',
        'vendor'              => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }

        if (null !== $this->instanceSubTypeName) {
            $res['InstanceSubTypeName'] = $this->instanceSubTypeName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypeName) {
            $res['InstanceTypeName'] = $this->instanceTypeName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }

        if (isset($map['InstanceSubTypeName'])) {
            $model->instanceSubTypeName = $map['InstanceSubTypeName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypeName'])) {
            $model->instanceTypeName = $map['InstanceTypeName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
