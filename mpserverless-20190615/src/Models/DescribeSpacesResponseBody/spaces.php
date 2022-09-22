<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpacesResponseBody;

use AlibabaCloud\Tea\Model;

class spaces extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $emasWorkspaceId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $packageEndDate;

    /**
     * @var string
     */
    public $packageStartDate;

    /**
     * @var string
     */
    public $packageStatus;

    /**
     * @var string
     */
    public $renewDuration;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $specCode;
    protected $_name = [
        'autoRenew'        => 'AutoRenew',
        'chargeType'       => 'ChargeType',
        'description'      => 'Description',
        'emasWorkspaceId'  => 'EmasWorkspaceId',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'instanceId'       => 'InstanceId',
        'name'             => 'Name',
        'orderType'        => 'OrderType',
        'packageEndDate'   => 'PackageEndDate',
        'packageStartDate' => 'PackageStartDate',
        'packageStatus'    => 'PackageStatus',
        'renewDuration'    => 'RenewDuration',
        'serviceStatus'    => 'ServiceStatus',
        'spaceId'          => 'SpaceId',
        'specCode'         => 'SpecCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->emasWorkspaceId) {
            $res['EmasWorkspaceId'] = $this->emasWorkspaceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->packageEndDate) {
            $res['PackageEndDate'] = $this->packageEndDate;
        }
        if (null !== $this->packageStartDate) {
            $res['PackageStartDate'] = $this->packageStartDate;
        }
        if (null !== $this->packageStatus) {
            $res['PackageStatus'] = $this->packageStatus;
        }
        if (null !== $this->renewDuration) {
            $res['RenewDuration'] = $this->renewDuration;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EmasWorkspaceId'])) {
            $model->emasWorkspaceId = $map['EmasWorkspaceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PackageEndDate'])) {
            $model->packageEndDate = $map['PackageEndDate'];
        }
        if (isset($map['PackageStartDate'])) {
            $model->packageStartDate = $map['PackageStartDate'];
        }
        if (isset($map['PackageStatus'])) {
            $model->packageStatus = $map['PackageStatus'];
        }
        if (isset($map['RenewDuration'])) {
            $model->renewDuration = $map['RenewDuration'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SpecCode'])) {
            $model->specCode = $map['SpecCode'];
        }

        return $model;
    }
}
