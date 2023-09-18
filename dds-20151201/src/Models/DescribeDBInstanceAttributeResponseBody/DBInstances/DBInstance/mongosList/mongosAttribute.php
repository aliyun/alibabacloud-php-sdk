<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\mongosList;

use AlibabaCloud\Tea\Model;

class mongosAttribute extends Model
{
    /**
     * @description The endpoint of the mongos node.
     *
     * @example s-bp1d8c262a15****.mongodb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectSting;

    /**
     * @description The maximum number of connections to the mongos node.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The maximum IOPS of the mongos node.
     *
     * @example 800
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description The type of the mongos node.
     *
     * @example dds.mongos.mid
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @description The name of the mongos node.
     *
     * @example mongos1
     *
     * @var string
     */
    public $nodeDescription;

    /**
     * @description The ID of the mongos node.
     *
     * @example s-bp1d8c262a15****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The port number that is used to connect to the mongos node.
     *
     * @example 3717
     *
     * @var int
     */
    public $port;

    /**
     * @description The state of the mongos node. For more information, see [Instance states](~~63870~~).
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The VPC ID of the instance.
     *
     * > This parameter is returned if the network type of the instance is VPC.
     * @example vpc-bp1n3i15v90el48nx****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the instance.
     *
     * > This parameter is returned if the network type of the instance is VPC.
     * @example vsw-bp1vj604nj5a9zz74****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the mongos node.
     *
     * @example s-bp1d8c262a158****
     *
     * @var string
     */
    public $vpcCloudInstanceId;
    protected $_name = [
        'connectSting'       => 'ConnectSting',
        'maxConnections'     => 'MaxConnections',
        'maxIOPS'            => 'MaxIOPS',
        'nodeClass'          => 'NodeClass',
        'nodeDescription'    => 'NodeDescription',
        'nodeId'             => 'NodeId',
        'port'               => 'Port',
        'status'             => 'Status',
        'VPCId'              => 'VPCId',
        'vSwitchId'          => 'VSwitchId',
        'vpcCloudInstanceId' => 'VpcCloudInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectSting) {
            $res['ConnectSting'] = $this->connectSting;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->nodeDescription) {
            $res['NodeDescription'] = $this->nodeDescription;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mongosAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectSting'])) {
            $model->connectSting = $map['ConnectSting'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['NodeDescription'])) {
            $model->nodeDescription = $map['NodeDescription'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }

        return $model;
    }
}
