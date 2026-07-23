<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class SourceRabbitMQMsgSyncParameters extends Model
{
    /**
     * @var string
     */
    public $bodyDataType;

    /**
     * @var string
     */
    public $cloudMigrationTaskId;

    /**
     * @var string
     */
    public $dstClusterHost;

    /**
     * @var string
     */
    public $dstClusterType;

    /**
     * @var string
     */
    public $endpoint;

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
    public $networkType;

    /**
     * @var string
     */
    public $orderConsume;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $prefetchCount;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $srcClusterHost;

    /**
     * @var string
     */
    public $srcClusterType;

    /**
     * @var string
     */
    public $syncMetaType;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $virtualHostName;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bodyDataType' => 'BodyDataType',
        'cloudMigrationTaskId' => 'CloudMigrationTaskId',
        'dstClusterHost' => 'DstClusterHost',
        'dstClusterType' => 'DstClusterType',
        'endpoint' => 'Endpoint',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'networkType' => 'NetworkType',
        'orderConsume' => 'OrderConsume',
        'password' => 'Password',
        'prefetchCount' => 'PrefetchCount',
        'regex' => 'Regex',
        'securityGroupId' => 'SecurityGroupId',
        'srcClusterHost' => 'SrcClusterHost',
        'srcClusterType' => 'SrcClusterType',
        'syncMetaType' => 'SyncMetaType',
        'username' => 'Username',
        'vSwitchIds' => 'VSwitchIds',
        'virtualHostName' => 'VirtualHostName',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyDataType) {
            $res['BodyDataType'] = $this->bodyDataType;
        }

        if (null !== $this->cloudMigrationTaskId) {
            $res['CloudMigrationTaskId'] = $this->cloudMigrationTaskId;
        }

        if (null !== $this->dstClusterHost) {
            $res['DstClusterHost'] = $this->dstClusterHost;
        }

        if (null !== $this->dstClusterType) {
            $res['DstClusterType'] = $this->dstClusterType;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->orderConsume) {
            $res['OrderConsume'] = $this->orderConsume;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->prefetchCount) {
            $res['PrefetchCount'] = $this->prefetchCount;
        }

        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->srcClusterHost) {
            $res['SrcClusterHost'] = $this->srcClusterHost;
        }

        if (null !== $this->srcClusterType) {
            $res['SrcClusterType'] = $this->srcClusterType;
        }

        if (null !== $this->syncMetaType) {
            $res['SyncMetaType'] = $this->syncMetaType;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        if (null !== $this->virtualHostName) {
            $res['VirtualHostName'] = $this->virtualHostName;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['BodyDataType'])) {
            $model->bodyDataType = $map['BodyDataType'];
        }

        if (isset($map['CloudMigrationTaskId'])) {
            $model->cloudMigrationTaskId = $map['CloudMigrationTaskId'];
        }

        if (isset($map['DstClusterHost'])) {
            $model->dstClusterHost = $map['DstClusterHost'];
        }

        if (isset($map['DstClusterType'])) {
            $model->dstClusterType = $map['DstClusterType'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['OrderConsume'])) {
            $model->orderConsume = $map['OrderConsume'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PrefetchCount'])) {
            $model->prefetchCount = $map['PrefetchCount'];
        }

        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SrcClusterHost'])) {
            $model->srcClusterHost = $map['SrcClusterHost'];
        }

        if (isset($map['SrcClusterType'])) {
            $model->srcClusterType = $map['SrcClusterType'];
        }

        if (isset($map['SyncMetaType'])) {
            $model->syncMetaType = $map['SyncMetaType'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }

        if (isset($map['VirtualHostName'])) {
            $model->virtualHostName = $map['VirtualHostName'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
