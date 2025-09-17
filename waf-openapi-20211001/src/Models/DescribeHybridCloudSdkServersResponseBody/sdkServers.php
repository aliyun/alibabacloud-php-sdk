<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudSdkServersResponseBody;

use AlibabaCloud\Dara\Model;

class sdkServers extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $mid;

    /**
     * @var string
     */
    public $protectionGroupAddress;

    /**
     * @var string
     */
    public $pullinStatus;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'createTime' => 'CreateTime',
        'hostName' => 'HostName',
        'ip' => 'Ip',
        'mid' => 'Mid',
        'protectionGroupAddress' => 'ProtectionGroupAddress',
        'pullinStatus' => 'PullinStatus',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }

        if (null !== $this->protectionGroupAddress) {
            $res['ProtectionGroupAddress'] = $this->protectionGroupAddress;
        }

        if (null !== $this->pullinStatus) {
            $res['PullinStatus'] = $this->pullinStatus;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }

        if (isset($map['ProtectionGroupAddress'])) {
            $model->protectionGroupAddress = $map['ProtectionGroupAddress'];
        }

        if (isset($map['PullinStatus'])) {
            $model->pullinStatus = $map['PullinStatus'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
