<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpacesResponseBody;

use AlibabaCloud\Tea\Model;

class spaces extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 3818905
     *
     * @var int
     */
    public $emasWorkspaceId;

    /**
     * @example 2022-05-19T06:06:05Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-05-19T06:06:05Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example emas_EmasServerlessPre_public_cn-0ju2pax****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example myspace
     *
     * @var string
     */
    public $name;

    /**
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 2022-09-18T16:00:00Z
     *
     * @var string
     */
    public $packageEndDate;

    /**
     * @example 2022-06-18T16:00:00Z
     *
     * @var string
     */
    public $packageStartDate;

    /**
     * @example UPGRADING
     *
     * @var string
     */
    public $packageStatus;

    /**
     * @example 3
     *
     * @var string
     */
    public $renewDuration;

    /**
     * @example IN_SERVICE
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @example mp-f215973f-db40-4013-92a8-b09690c7****
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example ENTERPRISE
     *
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
