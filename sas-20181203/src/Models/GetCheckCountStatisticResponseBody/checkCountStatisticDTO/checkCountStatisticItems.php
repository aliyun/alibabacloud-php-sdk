<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckCountStatisticResponseBody\checkCountStatisticDTO;

use AlibabaCloud\Dara\Model;

class checkCountStatisticItems extends Model
{
    /**
     * @var string
     */
    public $checkShowName;

    /**
     * @var int
     */
    public $cores;

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
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $vendor;

    /**
     * @var string
     */
    public $vendorShowName;

    /**
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'checkShowName' => 'CheckShowName',
        'cores' => 'Cores',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceSubType' => 'InstanceSubType',
        'instanceSubTypeName' => 'InstanceSubTypeName',
        'instanceType' => 'InstanceType',
        'instanceTypeName' => 'InstanceTypeName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'os' => 'Os',
        'regionId' => 'RegionId',
        'riskCount' => 'RiskCount',
        'uuid' => 'Uuid',
        'vendor' => 'Vendor',
        'vendorShowName' => 'VendorShowName',
        'vpcInstanceId' => 'VpcInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }

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

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        if (null !== $this->vendorShowName) {
            $res['VendorShowName'] = $this->vendorShowName;
        }

        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
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
        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }

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

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        if (isset($map['VendorShowName'])) {
            $model->vendorShowName = $map['VendorShowName'];
        }

        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
