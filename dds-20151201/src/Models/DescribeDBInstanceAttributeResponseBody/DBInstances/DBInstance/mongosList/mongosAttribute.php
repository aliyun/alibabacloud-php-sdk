<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\mongosList;

use AlibabaCloud\Dara\Model;

class mongosAttribute extends Model
{
    /**
     * @var string
     */
    public $connectSting;
    /**
     * @var string
     */
    public $connectString;
    /**
     * @var string
     */
    public $currentKernelVersion;
    /**
     * @var string
     */
    public $lockMode;
    /**
     * @var int
     */
    public $maxConnections;
    /**
     * @var int
     */
    public $maxIOPS;
    /**
     * @var string
     */
    public $nodeClass;
    /**
     * @var string
     */
    public $nodeDescription;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var int
     */
    public $port;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $VPCId;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $vpcCloudInstanceId;
    protected $_name = [
        'connectSting'         => 'ConnectSting',
        'connectString'        => 'ConnectString',
        'currentKernelVersion' => 'CurrentKernelVersion',
        'lockMode'             => 'LockMode',
        'maxConnections'       => 'MaxConnections',
        'maxIOPS'              => 'MaxIOPS',
        'nodeClass'            => 'NodeClass',
        'nodeDescription'      => 'NodeDescription',
        'nodeId'               => 'NodeId',
        'port'                 => 'Port',
        'status'               => 'Status',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'vpcCloudInstanceId'   => 'VpcCloudInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectSting) {
            $res['ConnectSting'] = $this->connectSting;
        }

        if (null !== $this->connectString) {
            $res['ConnectString'] = $this->connectString;
        }

        if (null !== $this->currentKernelVersion) {
            $res['CurrentKernelVersion'] = $this->currentKernelVersion;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectSting'])) {
            $model->connectSting = $map['ConnectSting'];
        }

        if (isset($map['ConnectString'])) {
            $model->connectString = $map['ConnectString'];
        }

        if (isset($map['CurrentKernelVersion'])) {
            $model->currentKernelVersion = $map['CurrentKernelVersion'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
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
