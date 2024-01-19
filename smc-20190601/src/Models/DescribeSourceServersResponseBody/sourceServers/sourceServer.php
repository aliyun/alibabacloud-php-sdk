<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\systemDiskParts;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\tags;
use AlibabaCloud\Tea\Model;

class sourceServer extends Model
{
    /**
     * @description The version number of the SMC client.
     *
     * @example 1.5.2.3
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @description The system architecture of the migration source.
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The time when the migration source was created.
     *
     * @example 2019-06-27T02:58:09Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The data disk on the migration source.
     *
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @description The description of the migration source.
     *
     * @example Server Source Imported By GotoAliyun.
     *
     * @var string
     */
    public $description;

    /**
     * @description The error code of the migration source.
     *
     * @example SourceServer.Offline
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The interval at which heartbeats are sent from the SMC client. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $heartbeatRate;

    /**
     * @description The ID of the last migration job.
     *
     * @example j-bp19vlwm0tyigbmj****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The kernel level of the migration source.
     *
     * @example 1
     *
     * @var int
     */
    public $kernelLevel;

    /**
     * @description The name of the migration source.
     *
     * @example SourceServerName
     *
     * @var string
     */
    public $name;

    /**
     * @description The operating system of the migration source.
     *
     * @example OpenSUSE
     *
     * @var string
     */
    public $platform;

    /**
     * @description The replication driver used for migration. Default value: SMT.
     *
     * @example SMT
     *
     * @var string
     */
    public $replicationDriver;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmw3ty5y7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the migration source.
     *
     * @example s-bp1e2fsl57knvuug****
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The state of the migration source.
     *
     * @example InUse
     *
     * @var string
     */
    public $state;

    /**
     * @description The status information of the migration source. This parameter is returned if the migration source is in the Unavailable state. The value of this parameter consists of key-value pairs in the JSON format. Sample keys:
     *
     * error_msg: The error message.
     * @example {"error_code": "S1", "error_msg": "Rsync not found. Please install rsync."}
     *
     * @var string
     */
    public $statusInfo;

    /**
     * @description The information about the system disk partition.
     *
     * @var systemDiskParts
     */
    public $systemDiskParts;

    /**
     * @description The system disk size of the migration source. Unit: GiB.
     *
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The system information of the migration source. The value of this parameter consists of key-value pairs in the JSON format. The key-value pairs are extensible and have fixed keys. The JSON string does not exceed 1 KB in size. Sample keys:
     *
     * memory_usage: The memory usage.
     * @example {\"agent_mode\":\"daemon\",\"agent_type\":\"aliyun\",\"client_type\":\"\",\"cores\":\"2\",\"cpu_usage\":\"0.00\",\"hostname\":\"ixxxxxxxxxx\",\"ipv4\":\"10.0.0.1\",\"memory\":\"8.00\",\"memory_usage\":\"3.61\"}
     *
     * @var string
     */
    public $systemInfo;

    /**
     * @description The information about the tags.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'agentVersion'      => 'AgentVersion',
        'architecture'      => 'Architecture',
        'creationTime'      => 'CreationTime',
        'dataDisks'         => 'DataDisks',
        'description'       => 'Description',
        'errorCode'         => 'ErrorCode',
        'heartbeatRate'     => 'HeartbeatRate',
        'jobId'             => 'JobId',
        'kernelLevel'       => 'KernelLevel',
        'name'              => 'Name',
        'platform'          => 'Platform',
        'replicationDriver' => 'ReplicationDriver',
        'resourceGroupId'   => 'ResourceGroupId',
        'sourceId'          => 'SourceId',
        'state'             => 'State',
        'statusInfo'        => 'StatusInfo',
        'systemDiskParts'   => 'SystemDiskParts',
        'systemDiskSize'    => 'SystemDiskSize',
        'systemInfo'        => 'SystemInfo',
        'tags'              => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->heartbeatRate) {
            $res['HeartbeatRate'] = $this->heartbeatRate;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->kernelLevel) {
            $res['KernelLevel'] = $this->kernelLevel;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->replicationDriver) {
            $res['ReplicationDriver'] = $this->replicationDriver;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->statusInfo) {
            $res['StatusInfo'] = $this->statusInfo;
        }
        if (null !== $this->systemDiskParts) {
            $res['SystemDiskParts'] = null !== $this->systemDiskParts ? $this->systemDiskParts->toMap() : null;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = $this->systemInfo;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['HeartbeatRate'])) {
            $model->heartbeatRate = $map['HeartbeatRate'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['KernelLevel'])) {
            $model->kernelLevel = $map['KernelLevel'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ReplicationDriver'])) {
            $model->replicationDriver = $map['ReplicationDriver'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StatusInfo'])) {
            $model->statusInfo = $map['StatusInfo'];
        }
        if (isset($map['SystemDiskParts'])) {
            $model->systemDiskParts = systemDiskParts::fromMap($map['SystemDiskParts']);
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['SystemInfo'])) {
            $model->systemInfo = $map['SystemInfo'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
