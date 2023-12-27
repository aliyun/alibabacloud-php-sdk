<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class SourceRocketMQParameters extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $filterSql;

    /**
     * @var string
     */
    public $filterType;

    /**
     * @var string
     */
    public $groupID;

    /**
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @example PrivateNetwork
     *
     * @var string
     */
    public $instanceNetwork;

    /**
     * @var string
     */
    public $instancePassword;

    /**
     * @var string
     */
    public $instanceSecurityGroupId;

    /**
     * @example Cloud_5
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceUsername;

    /**
     * @var string
     */
    public $instanceVSwitchIds;

    /**
     * @var string
     */
    public $instanceVpcId;

    /**
     * @example CONSUME_FROM_LAST_OFFSET
     *
     * @var string
     */
    public $offset;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'authType'                => 'AuthType',
        'filterSql'               => 'FilterSql',
        'filterType'              => 'FilterType',
        'groupID'                 => 'GroupID',
        'instanceEndpoint'        => 'InstanceEndpoint',
        'instanceId'              => 'InstanceId',
        'instanceNetwork'         => 'InstanceNetwork',
        'instancePassword'        => 'InstancePassword',
        'instanceSecurityGroupId' => 'InstanceSecurityGroupId',
        'instanceType'            => 'InstanceType',
        'instanceUsername'        => 'InstanceUsername',
        'instanceVSwitchIds'      => 'InstanceVSwitchIds',
        'instanceVpcId'           => 'InstanceVpcId',
        'offset'                  => 'Offset',
        'regionId'                => 'RegionId',
        'tag'                     => 'Tag',
        'timestamp'               => 'Timestamp',
        'topic'                   => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->filterSql) {
            $res['FilterSql'] = $this->filterSql;
        }
        if (null !== $this->filterType) {
            $res['FilterType'] = $this->filterType;
        }
        if (null !== $this->groupID) {
            $res['GroupID'] = $this->groupID;
        }
        if (null !== $this->instanceEndpoint) {
            $res['InstanceEndpoint'] = $this->instanceEndpoint;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceNetwork) {
            $res['InstanceNetwork'] = $this->instanceNetwork;
        }
        if (null !== $this->instancePassword) {
            $res['InstancePassword'] = $this->instancePassword;
        }
        if (null !== $this->instanceSecurityGroupId) {
            $res['InstanceSecurityGroupId'] = $this->instanceSecurityGroupId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceUsername) {
            $res['InstanceUsername'] = $this->instanceUsername;
        }
        if (null !== $this->instanceVSwitchIds) {
            $res['InstanceVSwitchIds'] = $this->instanceVSwitchIds;
        }
        if (null !== $this->instanceVpcId) {
            $res['InstanceVpcId'] = $this->instanceVpcId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SourceRocketMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['FilterSql'])) {
            $model->filterSql = $map['FilterSql'];
        }
        if (isset($map['FilterType'])) {
            $model->filterType = $map['FilterType'];
        }
        if (isset($map['GroupID'])) {
            $model->groupID = $map['GroupID'];
        }
        if (isset($map['InstanceEndpoint'])) {
            $model->instanceEndpoint = $map['InstanceEndpoint'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceNetwork'])) {
            $model->instanceNetwork = $map['InstanceNetwork'];
        }
        if (isset($map['InstancePassword'])) {
            $model->instancePassword = $map['InstancePassword'];
        }
        if (isset($map['InstanceSecurityGroupId'])) {
            $model->instanceSecurityGroupId = $map['InstanceSecurityGroupId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceUsername'])) {
            $model->instanceUsername = $map['InstanceUsername'];
        }
        if (isset($map['InstanceVSwitchIds'])) {
            $model->instanceVSwitchIds = $map['InstanceVSwitchIds'];
        }
        if (isset($map['InstanceVpcId'])) {
            $model->instanceVpcId = $map['InstanceVpcId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
