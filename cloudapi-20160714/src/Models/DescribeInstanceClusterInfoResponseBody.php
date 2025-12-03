<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterInfoResponseBody\instanceClusterAttribute;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterInfoResponseBody\instanceList;

class DescribeInstanceClusterInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var instanceClusterAttribute
     */
    public $instanceClusterAttribute;

    /**
     * @var string
     */
    public $instanceClusterId;

    /**
     * @var string
     */
    public $instanceClusterName;

    /**
     * @var string
     */
    public $instanceClusterStatus;

    /**
     * @var string
     */
    public $instanceClusterType;

    /**
     * @var string
     */
    public $instanceClusterVersion;

    /**
     * @var instanceList
     */
    public $instanceList;

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
    public $requestId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'instanceClusterAttribute' => 'InstanceClusterAttribute',
        'instanceClusterId' => 'InstanceClusterId',
        'instanceClusterName' => 'InstanceClusterName',
        'instanceClusterStatus' => 'InstanceClusterStatus',
        'instanceClusterType' => 'InstanceClusterType',
        'instanceClusterVersion' => 'InstanceClusterVersion',
        'instanceList' => 'InstanceList',
        'modifiedTime' => 'ModifiedTime',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceClusterAttribute) {
            $this->instanceClusterAttribute->validate();
        }
        if (null !== $this->instanceList) {
            $this->instanceList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceClusterAttribute) {
            $res['InstanceClusterAttribute'] = null !== $this->instanceClusterAttribute ? $this->instanceClusterAttribute->toArray($noStream) : $this->instanceClusterAttribute;
        }

        if (null !== $this->instanceClusterId) {
            $res['InstanceClusterId'] = $this->instanceClusterId;
        }

        if (null !== $this->instanceClusterName) {
            $res['InstanceClusterName'] = $this->instanceClusterName;
        }

        if (null !== $this->instanceClusterStatus) {
            $res['InstanceClusterStatus'] = $this->instanceClusterStatus;
        }

        if (null !== $this->instanceClusterType) {
            $res['InstanceClusterType'] = $this->instanceClusterType;
        }

        if (null !== $this->instanceClusterVersion) {
            $res['InstanceClusterVersion'] = $this->instanceClusterVersion;
        }

        if (null !== $this->instanceList) {
            $res['InstanceList'] = null !== $this->instanceList ? $this->instanceList->toArray($noStream) : $this->instanceList;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceClusterAttribute'])) {
            $model->instanceClusterAttribute = instanceClusterAttribute::fromMap($map['InstanceClusterAttribute']);
        }

        if (isset($map['InstanceClusterId'])) {
            $model->instanceClusterId = $map['InstanceClusterId'];
        }

        if (isset($map['InstanceClusterName'])) {
            $model->instanceClusterName = $map['InstanceClusterName'];
        }

        if (isset($map['InstanceClusterStatus'])) {
            $model->instanceClusterStatus = $map['InstanceClusterStatus'];
        }

        if (isset($map['InstanceClusterType'])) {
            $model->instanceClusterType = $map['InstanceClusterType'];
        }

        if (isset($map['InstanceClusterVersion'])) {
            $model->instanceClusterVersion = $map['InstanceClusterVersion'];
        }

        if (isset($map['InstanceList'])) {
            $model->instanceList = instanceList::fromMap($map['InstanceList']);
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
