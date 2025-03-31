<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\disks;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\systemDiskParts;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\tags;

class sourceServer extends Model
{
    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $description;

    /**
     * @var disks
     */
    public $disks;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $heartbeatRate;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $kernelLevel;

    /**
     * @var string
     */
    public $name;

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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $statusInfo;

    /**
     * @var systemDiskParts
     */
    public $systemDiskParts;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $systemInfo;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $workgroupId;
    protected $_name = [
        'agentVersion' => 'AgentVersion',
        'architecture' => 'Architecture',
        'creationTime' => 'CreationTime',
        'dataDisks' => 'DataDisks',
        'description' => 'Description',
        'disks' => 'Disks',
        'errorCode' => 'ErrorCode',
        'heartbeatRate' => 'HeartbeatRate',
        'jobId' => 'JobId',
        'kernelLevel' => 'KernelLevel',
        'name' => 'Name',
        'platform' => 'Platform',
        'replicationDriver' => 'ReplicationDriver',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceId' => 'SourceId',
        'state' => 'State',
        'statusInfo' => 'StatusInfo',
        'systemDiskParts' => 'SystemDiskParts',
        'systemDiskSize' => 'SystemDiskSize',
        'systemInfo' => 'SystemInfo',
        'tags' => 'Tags',
        'workgroupId' => 'WorkgroupId',
    ];

    public function validate()
    {
        if (null !== $this->dataDisks) {
            $this->dataDisks->validate();
        }
        if (null !== $this->disks) {
            $this->disks->validate();
        }
        if (null !== $this->systemDiskParts) {
            $this->systemDiskParts->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toArray($noStream) : $this->dataDisks;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->disks) {
            $res['Disks'] = null !== $this->disks ? $this->disks->toArray($noStream) : $this->disks;
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
            $res['SystemDiskParts'] = null !== $this->systemDiskParts ? $this->systemDiskParts->toArray($noStream) : $this->systemDiskParts;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = $this->systemInfo;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->workgroupId) {
            $res['WorkgroupId'] = $this->workgroupId;
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

        if (isset($map['Disks'])) {
            $model->disks = disks::fromMap($map['Disks']);
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

        if (isset($map['WorkgroupId'])) {
            $model->workgroupId = $map['WorkgroupId'];
        }

        return $model;
    }
}
