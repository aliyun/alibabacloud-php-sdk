<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiGroupsResponseBody\apiGroupAttributes;

use AlibabaCloud\Tea\Model;

class apiGroupAttribute extends Model
{
    /**
     * @var string
     */
    public $billingStatus;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $httpsPolicy;

    /**
     * @var string
     */
    public $illegalStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var int
     */
    public $trafficLimit;
    protected $_name = [
        'billingStatus' => 'BillingStatus',
        'createdTime'   => 'CreatedTime',
        'description'   => 'Description',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'httpsPolicy'   => 'HttpsPolicy',
        'illegalStatus' => 'IllegalStatus',
        'instanceId'    => 'InstanceId',
        'instanceType'  => 'InstanceType',
        'modifiedTime'  => 'ModifiedTime',
        'regionId'      => 'RegionId',
        'subDomain'     => 'SubDomain',
        'trafficLimit'  => 'TrafficLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingStatus) {
            $res['BillingStatus'] = $this->billingStatus;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }
        if (null !== $this->illegalStatus) {
            $res['IllegalStatus'] = $this->illegalStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->trafficLimit) {
            $res['TrafficLimit'] = $this->trafficLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiGroupAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingStatus'])) {
            $model->billingStatus = $map['BillingStatus'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }
        if (isset($map['IllegalStatus'])) {
            $model->illegalStatus = $map['IllegalStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['TrafficLimit'])) {
            $model->trafficLimit = $map['TrafficLimit'];
        }

        return $model;
    }
}
