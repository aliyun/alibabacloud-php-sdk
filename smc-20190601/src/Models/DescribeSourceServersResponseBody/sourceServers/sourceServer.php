<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\systemDiskParts;
use AlibabaCloud\Tea\Model;

class sourceServer extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $heartbeatRate;

    /**
     * @var string
     */
    public $state;

    /**
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @var systemDiskParts
     */
    public $systemDiskParts;

    /**
     * @var int
     */
    public $kernelLevel;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $statusInfo;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $replicationDriver;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $systemInfo;

    /**
     * @var string
     */
    public $architecture;
    protected $_name = [
        'creationTime'      => 'CreationTime',
        'heartbeatRate'     => 'HeartbeatRate',
        'state'             => 'State',
        'dataDisks'         => 'DataDisks',
        'systemDiskParts'   => 'SystemDiskParts',
        'kernelLevel'       => 'KernelLevel',
        'sourceId'          => 'SourceId',
        'agentVersion'      => 'AgentVersion',
        'statusInfo'        => 'StatusInfo',
        'systemDiskSize'    => 'SystemDiskSize',
        'description'       => 'Description',
        'errorCode'         => 'ErrorCode',
        'jobId'             => 'JobId',
        'platform'          => 'Platform',
        'replicationDriver' => 'ReplicationDriver',
        'name'              => 'Name',
        'systemInfo'        => 'SystemInfo',
        'architecture'      => 'Architecture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->heartbeatRate) {
            $res['HeartbeatRate'] = $this->heartbeatRate;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->systemDiskParts) {
            $res['SystemDiskParts'] = null !== $this->systemDiskParts ? $this->systemDiskParts->toMap() : null;
        }
        if (null !== $this->kernelLevel) {
            $res['KernelLevel'] = $this->kernelLevel;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->statusInfo) {
            $res['StatusInfo'] = $this->statusInfo;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->replicationDriver) {
            $res['ReplicationDriver'] = $this->replicationDriver;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = $this->systemInfo;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['HeartbeatRate'])) {
            $model->heartbeatRate = $map['HeartbeatRate'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['SystemDiskParts'])) {
            $model->systemDiskParts = systemDiskParts::fromMap($map['SystemDiskParts']);
        }
        if (isset($map['KernelLevel'])) {
            $model->kernelLevel = $map['KernelLevel'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['StatusInfo'])) {
            $model->statusInfo = $map['StatusInfo'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ReplicationDriver'])) {
            $model->replicationDriver = $map['ReplicationDriver'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SystemInfo'])) {
            $model->systemInfo = $map['SystemInfo'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        return $model;
    }
}
