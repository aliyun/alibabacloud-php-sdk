<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponseBody\apiGroupAttributes;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponseBody\apiGroupAttributes\apiGroupAttribute\tags;
use AlibabaCloud\Tea\Model;

class apiGroupAttribute extends Model
{
    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $billingStatus;

    /**
     * @var int
     */
    public $trafficLimit;

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
    public $regionId;

    /**
     * @var string
     */
    public $modifiedTime;

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
    public $description;

    /**
     * @var string
     */
    public $illegalStatus;

    /**
     * @var string
     */
    public $httpsPolicy;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'basePath'      => 'BasePath',
        'billingStatus' => 'BillingStatus',
        'trafficLimit'  => 'TrafficLimit',
        'instanceId'    => 'InstanceId',
        'instanceType'  => 'InstanceType',
        'regionId'      => 'RegionId',
        'modifiedTime'  => 'ModifiedTime',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'description'   => 'Description',
        'illegalStatus' => 'IllegalStatus',
        'httpsPolicy'   => 'HttpsPolicy',
        'subDomain'     => 'SubDomain',
        'createdTime'   => 'CreatedTime',
        'tags'          => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
        }
        if (null !== $this->billingStatus) {
            $res['BillingStatus'] = $this->billingStatus;
        }
        if (null !== $this->trafficLimit) {
            $res['TrafficLimit'] = $this->trafficLimit;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->illegalStatus) {
            $res['IllegalStatus'] = $this->illegalStatus;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
        }
        if (isset($map['BillingStatus'])) {
            $model->billingStatus = $map['BillingStatus'];
        }
        if (isset($map['TrafficLimit'])) {
            $model->trafficLimit = $map['TrafficLimit'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IllegalStatus'])) {
            $model->illegalStatus = $map['IllegalStatus'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
