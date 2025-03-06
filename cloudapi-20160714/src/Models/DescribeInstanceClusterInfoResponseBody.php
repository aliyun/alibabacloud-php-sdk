<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterInfoResponseBody\instanceClusterAttribute;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterInfoResponseBody\instanceList;
use AlibabaCloud\Tea\Model;

class DescribeInstanceClusterInfoResponseBody extends Model
{
    /**
     * @description The time when the cluster was created.
     *
     * @example 2022-10-10T18:29:27
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The cluster description, which can be up to 200 characters in length.
     *
     * @example v0.0.4
     *
     * @var string
     */
    public $description;

    /**
     * @description The cluster details.
     *
     * @var instanceClusterAttribute
     */
    public $instanceClusterAttribute;

    /**
     * @description The cluster ID.
     *
     * @example apigateway-ht-04e41d95e9c1
     *
     * @var string
     */
    public $instanceClusterId;

    /**
     * @description The cluster name.
     *
     * @example test
     *
     * @var string
     */
    public $instanceClusterName;

    /**
     * @description The cluster status.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $instanceClusterStatus;

    /**
     * @description The cluster type.
     *
     * @example normal
     *
     * @var string
     */
    public $instanceClusterType;

    /**
     * @description The cluster version.
     *
     * @example 3.5.3.856
     *
     * @var string
     */
    public $instanceClusterVersion;

    /**
     * @description The dedicated instances contained in the cluster.
     *
     * @var instanceList
     */
    public $instanceList;

    /**
     * @description The time when the cluster was last modified.
     *
     * @example 2023-06-19 10:40:29 +0800
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ015
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createdTime'              => 'CreatedTime',
        'description'              => 'Description',
        'instanceClusterAttribute' => 'InstanceClusterAttribute',
        'instanceClusterId'        => 'InstanceClusterId',
        'instanceClusterName'      => 'InstanceClusterName',
        'instanceClusterStatus'    => 'InstanceClusterStatus',
        'instanceClusterType'      => 'InstanceClusterType',
        'instanceClusterVersion'   => 'InstanceClusterVersion',
        'instanceList'             => 'InstanceList',
        'modifiedTime'             => 'ModifiedTime',
        'regionId'                 => 'RegionId',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceClusterAttribute) {
            $res['InstanceClusterAttribute'] = null !== $this->instanceClusterAttribute ? $this->instanceClusterAttribute->toMap() : null;
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
            $res['InstanceList'] = null !== $this->instanceList ? $this->instanceList->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeInstanceClusterInfoResponseBody
     */
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
