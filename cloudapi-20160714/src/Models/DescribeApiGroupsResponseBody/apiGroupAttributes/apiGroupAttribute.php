<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponseBody\apiGroupAttributes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponseBody\apiGroupAttributes\apiGroupAttribute\tags;

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
     * @var tags
     */
    public $tags;
    /**
     * @var int
     */
    public $trafficLimit;
    protected $_name = [
        'basePath'      => 'BasePath',
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
        'tags'          => 'Tags',
        'trafficLimit'  => 'TrafficLimit',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
        }

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

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->trafficLimit) {
            $res['TrafficLimit'] = $this->trafficLimit;
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
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
        }

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

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TrafficLimit'])) {
            $model->trafficLimit = $map['TrafficLimit'];
        }

        return $model;
    }
}
