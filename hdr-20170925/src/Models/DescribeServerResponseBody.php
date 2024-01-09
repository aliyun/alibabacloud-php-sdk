<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DescribeServerResponseBody extends Model
{
    /**
     * @example 9080
     *
     * @var int
     */
    public $agentPort;

    /**
     * @example 3.7.3
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @example bsdewmpci_rz
     *
     * @var string
     */
    public $alias;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example connected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @example false
     *
     * @var bool
     */
    public $consistent;

    /**
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @example {\"scheduleType\":\"CRON\",\"expression\":\"0 0 *\/1 * * 0,1,2,3,4,5,6\",\"initialDelay\":0}
     *
     * @var string
     */
    public $crashConsistentPointPolicy;

    /**
     * @example [{\"id\":\"0\",\"boot\":true,\"size\":500363689984}]
     *
     * @var string
     */
    public $disks;

    /**
     * @example cdr.console.plugin.failed_to_connect
     *
     * @var string
     */
    public $errno;

    /**
     * @example 3285276688384
     *
     * @var int
     */
    public $fullSyncCurrentSize;

    /**
     * @example 17
     *
     * @var int
     */
    public $fullSyncProgress;

    /**
     * @example 0
     *
     * @var int
     */
    public $fullSyncStartTime;

    /**
     * @example 365072220160
     *
     * @var int
     */
    public $fullSyncTotalSize;

    /**
     * @example iZ2ze0jazgwtuxettbk1ywZ
     *
     * @var string
     */
    public $hostname;

    /**
     * @example 0
     *
     * @var int
     */
    public $incrementalSyncStartTime;

    /**
     * @example 30.42.105.6
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $latestRecoveryPointTime;

    /**
     * @example 8589934591
     *
     * @var int
     */
    public $memory;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example "{\"Resynchronize\":true,\"TestFailover\":true,\"TestCleanup\":true,\"ChangeRecoveryPoint\":true,\"UnregisterServer\":true,\"ReversedEnableReplication\":true,\"ReversedDisableReplication\":true,\"DisableReplication\":true,\"CommitFailover\":true,\"RestartServer\":true,\"UpgradeServer\":true,\"ForcedFailover\":true,\"RepairReplication\":true,\"EnableReplication\":true,\"TriggerReversedRegister\":true,\"SetupAgent\":true,\"TriggerRegister\":true,\"CollectSupportBundle\":true,\"Failback\":true}"
     *
     * @var string
     */
    public $operations;

    /**
     * @example i-bp19axn91irnsi9204xg
     *
     * @var string
     */
    public $originalInstanceId;

    /**
     * @example CentOS;7.9.2009
     *
     * @var string
     */
    public $osDetail;

    /**
     * @example linux
     *
     * @var string
     */
    public $osType;

    /**
     * @example si-0001jntih0phb0i2w1ya
     *
     * @var string
     */
    public $primarySiteId;

    /**
     * @example i-bp19axn91irnsi9204xg
     *
     * @var string
     */
    public $recoveredInstanceId;

    /**
     * @example 192.168.2.2
     *
     * @var string
     */
    public $recoveredIpAddress;

    /**
     * @example 4
     *
     * @var int
     */
    public $recoveryCpu;

    /**
     * @example PL1
     *
     * @var string
     */
    public $recoveryEssdPerformanceLevel;

    /**
     * @example HDR_Recovery-sr-000bzkmmlwghq3soqry2
     *
     * @var string
     */
    public $recoveryInstanceName;

    /**
     * @example ecs.c5.2xlarge
     *
     * @var string
     */
    public $recoveryInstanceType;

    /**
     * @example 192.168.2.2
     *
     * @var string
     */
    public $recoveryIpAddress;

    /**
     * @example 4294967296
     *
     * @var int
     */
    public $recoveryMemory;

    /**
     * @example vsw-uf61v3bg6r790ir22jqv4
     *
     * @var string
     */
    public $recoveryNetwork;

    /**
     * @example echo \"127.0.0.1 kubernetes.docker.internal\" >> /etc/hosts
     *
     * @var string
     */
    public $recoveryPostScriptContent;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $recoveryPostScriptType;

    /**
     * @example false
     *
     * @var bool
     */
    public $recoveryReserveIp;

    /**
     * @example false
     *
     * @var bool
     */
    public $recoveryUseDhcp;

    /**
     * @example false
     *
     * @var bool
     */
    public $recoveryUseEssd;

    /**
     * @example false
     *
     * @var bool
     */
    public $recoveryUseSsd;

    /**
     * @example is-000bzkmmlwgibbduuoff
     *
     * @var string
     */
    public $replicationInfrastructureId;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $replicationInfrastructureType;

    /**
     * @example vsw-bp1g0s2u3b2kbn46kiy53
     *
     * @var string
     */
    public $replicationNetwork;

    /**
     * @description -
     *
     * @example -
     *
     * @var bool
     */
    public $replicationUseDhcp;

    /**
     * @example false
     *
     * @var bool
     */
    public $replicationUseEssd;

    /**
     * @example false
     *
     * @var bool
     */
    public $replicationUseOriginalInstance;

    /**
     * @example false
     *
     * @var bool
     */
    public $replicationUseSsd;

    /**
     * @example BBCC4082-98DF-5804-96C6-0E74C37C5867
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 45
     *
     * @var int
     */
    public $rpo;

    /**
     * @example si-000imvpcegvbh6i5kd2u
     *
     * @var string
     */
    public $secondarySiteId;

    /**
     * @example sr-0005qxusucbiip0g6t93
     *
     * @var string
     */
    public $serverId;

    /**
     * @example 3.7.3
     *
     * @var string
     */
    public $sourceGatewayVersion;

    /**
     * @example replicating
     *
     * @var string
     */
    public $status;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example i-bp13zgzv13am2n2z92lb
     *
     * @var string
     */
    public $targetGatewayVersion;

    /**
     * @example t-0004ka624vrza82g46ne
     *
     * @var string
     */
    public $taskId;

    /**
     * @example testFailovered
     *
     * @var string
     */
    public $testFailoverStatus;

    /**
     * @example i-bp13zgzv13am2n2z92lb
     *
     * @var string
     */
    public $testRecoveredInstanceId;

    /**
     * @example HDR_Recovery-sr-000c2rz7q8tak59pt6sw
     *
     * @var string
     */
    public $testRecoveredInstanceName;

    /**
     * @example 192.168.2.2
     *
     * @var string
     */
    public $testRecoveredIpAddress;
    protected $_name = [
        'agentPort'                      => 'AgentPort',
        'agentVersion'                   => 'AgentVersion',
        'alias'                          => 'Alias',
        'code'                           => 'Code',
        'connectionStatus'               => 'ConnectionStatus',
        'consistent'                     => 'Consistent',
        'cpu'                            => 'Cpu',
        'crashConsistentPointPolicy'     => 'CrashConsistentPointPolicy',
        'disks'                          => 'Disks',
        'errno'                          => 'Errno',
        'fullSyncCurrentSize'            => 'FullSyncCurrentSize',
        'fullSyncProgress'               => 'FullSyncProgress',
        'fullSyncStartTime'              => 'FullSyncStartTime',
        'fullSyncTotalSize'              => 'FullSyncTotalSize',
        'hostname'                       => 'Hostname',
        'incrementalSyncStartTime'       => 'IncrementalSyncStartTime',
        'ipAddress'                      => 'IpAddress',
        'latestRecoveryPointTime'        => 'LatestRecoveryPointTime',
        'memory'                         => 'Memory',
        'message'                        => 'Message',
        'operations'                     => 'Operations',
        'originalInstanceId'             => 'OriginalInstanceId',
        'osDetail'                       => 'OsDetail',
        'osType'                         => 'OsType',
        'primarySiteId'                  => 'PrimarySiteId',
        'recoveredInstanceId'            => 'RecoveredInstanceId',
        'recoveredIpAddress'             => 'RecoveredIpAddress',
        'recoveryCpu'                    => 'RecoveryCpu',
        'recoveryEssdPerformanceLevel'   => 'RecoveryEssdPerformanceLevel',
        'recoveryInstanceName'           => 'RecoveryInstanceName',
        'recoveryInstanceType'           => 'RecoveryInstanceType',
        'recoveryIpAddress'              => 'RecoveryIpAddress',
        'recoveryMemory'                 => 'RecoveryMemory',
        'recoveryNetwork'                => 'RecoveryNetwork',
        'recoveryPostScriptContent'      => 'RecoveryPostScriptContent',
        'recoveryPostScriptType'         => 'RecoveryPostScriptType',
        'recoveryReserveIp'              => 'RecoveryReserveIp',
        'recoveryUseDhcp'                => 'RecoveryUseDhcp',
        'recoveryUseEssd'                => 'RecoveryUseEssd',
        'recoveryUseSsd'                 => 'RecoveryUseSsd',
        'replicationInfrastructureId'    => 'ReplicationInfrastructureId',
        'replicationInfrastructureType'  => 'ReplicationInfrastructureType',
        'replicationNetwork'             => 'ReplicationNetwork',
        'replicationUseDhcp'             => 'ReplicationUseDhcp',
        'replicationUseEssd'             => 'ReplicationUseEssd',
        'replicationUseOriginalInstance' => 'ReplicationUseOriginalInstance',
        'replicationUseSsd'              => 'ReplicationUseSsd',
        'requestId'                      => 'RequestId',
        'rpo'                            => 'Rpo',
        'secondarySiteId'                => 'SecondarySiteId',
        'serverId'                       => 'ServerId',
        'sourceGatewayVersion'           => 'SourceGatewayVersion',
        'status'                         => 'Status',
        'success'                        => 'Success',
        'targetGatewayVersion'           => 'TargetGatewayVersion',
        'taskId'                         => 'TaskId',
        'testFailoverStatus'             => 'TestFailoverStatus',
        'testRecoveredInstanceId'        => 'TestRecoveredInstanceId',
        'testRecoveredInstanceName'      => 'TestRecoveredInstanceName',
        'testRecoveredIpAddress'         => 'TestRecoveredIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentPort) {
            $res['AgentPort'] = $this->agentPort;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->consistent) {
            $res['Consistent'] = $this->consistent;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->crashConsistentPointPolicy) {
            $res['CrashConsistentPointPolicy'] = $this->crashConsistentPointPolicy;
        }
        if (null !== $this->disks) {
            $res['Disks'] = $this->disks;
        }
        if (null !== $this->errno) {
            $res['Errno'] = $this->errno;
        }
        if (null !== $this->fullSyncCurrentSize) {
            $res['FullSyncCurrentSize'] = $this->fullSyncCurrentSize;
        }
        if (null !== $this->fullSyncProgress) {
            $res['FullSyncProgress'] = $this->fullSyncProgress;
        }
        if (null !== $this->fullSyncStartTime) {
            $res['FullSyncStartTime'] = $this->fullSyncStartTime;
        }
        if (null !== $this->fullSyncTotalSize) {
            $res['FullSyncTotalSize'] = $this->fullSyncTotalSize;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->incrementalSyncStartTime) {
            $res['IncrementalSyncStartTime'] = $this->incrementalSyncStartTime;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->latestRecoveryPointTime) {
            $res['LatestRecoveryPointTime'] = $this->latestRecoveryPointTime;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->operations) {
            $res['Operations'] = $this->operations;
        }
        if (null !== $this->originalInstanceId) {
            $res['OriginalInstanceId'] = $this->originalInstanceId;
        }
        if (null !== $this->osDetail) {
            $res['OsDetail'] = $this->osDetail;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->primarySiteId) {
            $res['PrimarySiteId'] = $this->primarySiteId;
        }
        if (null !== $this->recoveredInstanceId) {
            $res['RecoveredInstanceId'] = $this->recoveredInstanceId;
        }
        if (null !== $this->recoveredIpAddress) {
            $res['RecoveredIpAddress'] = $this->recoveredIpAddress;
        }
        if (null !== $this->recoveryCpu) {
            $res['RecoveryCpu'] = $this->recoveryCpu;
        }
        if (null !== $this->recoveryEssdPerformanceLevel) {
            $res['RecoveryEssdPerformanceLevel'] = $this->recoveryEssdPerformanceLevel;
        }
        if (null !== $this->recoveryInstanceName) {
            $res['RecoveryInstanceName'] = $this->recoveryInstanceName;
        }
        if (null !== $this->recoveryInstanceType) {
            $res['RecoveryInstanceType'] = $this->recoveryInstanceType;
        }
        if (null !== $this->recoveryIpAddress) {
            $res['RecoveryIpAddress'] = $this->recoveryIpAddress;
        }
        if (null !== $this->recoveryMemory) {
            $res['RecoveryMemory'] = $this->recoveryMemory;
        }
        if (null !== $this->recoveryNetwork) {
            $res['RecoveryNetwork'] = $this->recoveryNetwork;
        }
        if (null !== $this->recoveryPostScriptContent) {
            $res['RecoveryPostScriptContent'] = $this->recoveryPostScriptContent;
        }
        if (null !== $this->recoveryPostScriptType) {
            $res['RecoveryPostScriptType'] = $this->recoveryPostScriptType;
        }
        if (null !== $this->recoveryReserveIp) {
            $res['RecoveryReserveIp'] = $this->recoveryReserveIp;
        }
        if (null !== $this->recoveryUseDhcp) {
            $res['RecoveryUseDhcp'] = $this->recoveryUseDhcp;
        }
        if (null !== $this->recoveryUseEssd) {
            $res['RecoveryUseEssd'] = $this->recoveryUseEssd;
        }
        if (null !== $this->recoveryUseSsd) {
            $res['RecoveryUseSsd'] = $this->recoveryUseSsd;
        }
        if (null !== $this->replicationInfrastructureId) {
            $res['ReplicationInfrastructureId'] = $this->replicationInfrastructureId;
        }
        if (null !== $this->replicationInfrastructureType) {
            $res['ReplicationInfrastructureType'] = $this->replicationInfrastructureType;
        }
        if (null !== $this->replicationNetwork) {
            $res['ReplicationNetwork'] = $this->replicationNetwork;
        }
        if (null !== $this->replicationUseDhcp) {
            $res['ReplicationUseDhcp'] = $this->replicationUseDhcp;
        }
        if (null !== $this->replicationUseEssd) {
            $res['ReplicationUseEssd'] = $this->replicationUseEssd;
        }
        if (null !== $this->replicationUseOriginalInstance) {
            $res['ReplicationUseOriginalInstance'] = $this->replicationUseOriginalInstance;
        }
        if (null !== $this->replicationUseSsd) {
            $res['ReplicationUseSsd'] = $this->replicationUseSsd;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rpo) {
            $res['Rpo'] = $this->rpo;
        }
        if (null !== $this->secondarySiteId) {
            $res['SecondarySiteId'] = $this->secondarySiteId;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->sourceGatewayVersion) {
            $res['SourceGatewayVersion'] = $this->sourceGatewayVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->targetGatewayVersion) {
            $res['TargetGatewayVersion'] = $this->targetGatewayVersion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->testFailoverStatus) {
            $res['TestFailoverStatus'] = $this->testFailoverStatus;
        }
        if (null !== $this->testRecoveredInstanceId) {
            $res['TestRecoveredInstanceId'] = $this->testRecoveredInstanceId;
        }
        if (null !== $this->testRecoveredInstanceName) {
            $res['TestRecoveredInstanceName'] = $this->testRecoveredInstanceName;
        }
        if (null !== $this->testRecoveredIpAddress) {
            $res['TestRecoveredIpAddress'] = $this->testRecoveredIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentPort'])) {
            $model->agentPort = $map['AgentPort'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['Consistent'])) {
            $model->consistent = $map['Consistent'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CrashConsistentPointPolicy'])) {
            $model->crashConsistentPointPolicy = $map['CrashConsistentPointPolicy'];
        }
        if (isset($map['Disks'])) {
            $model->disks = $map['Disks'];
        }
        if (isset($map['Errno'])) {
            $model->errno = $map['Errno'];
        }
        if (isset($map['FullSyncCurrentSize'])) {
            $model->fullSyncCurrentSize = $map['FullSyncCurrentSize'];
        }
        if (isset($map['FullSyncProgress'])) {
            $model->fullSyncProgress = $map['FullSyncProgress'];
        }
        if (isset($map['FullSyncStartTime'])) {
            $model->fullSyncStartTime = $map['FullSyncStartTime'];
        }
        if (isset($map['FullSyncTotalSize'])) {
            $model->fullSyncTotalSize = $map['FullSyncTotalSize'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['IncrementalSyncStartTime'])) {
            $model->incrementalSyncStartTime = $map['IncrementalSyncStartTime'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['LatestRecoveryPointTime'])) {
            $model->latestRecoveryPointTime = $map['LatestRecoveryPointTime'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Operations'])) {
            $model->operations = $map['Operations'];
        }
        if (isset($map['OriginalInstanceId'])) {
            $model->originalInstanceId = $map['OriginalInstanceId'];
        }
        if (isset($map['OsDetail'])) {
            $model->osDetail = $map['OsDetail'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['PrimarySiteId'])) {
            $model->primarySiteId = $map['PrimarySiteId'];
        }
        if (isset($map['RecoveredInstanceId'])) {
            $model->recoveredInstanceId = $map['RecoveredInstanceId'];
        }
        if (isset($map['RecoveredIpAddress'])) {
            $model->recoveredIpAddress = $map['RecoveredIpAddress'];
        }
        if (isset($map['RecoveryCpu'])) {
            $model->recoveryCpu = $map['RecoveryCpu'];
        }
        if (isset($map['RecoveryEssdPerformanceLevel'])) {
            $model->recoveryEssdPerformanceLevel = $map['RecoveryEssdPerformanceLevel'];
        }
        if (isset($map['RecoveryInstanceName'])) {
            $model->recoveryInstanceName = $map['RecoveryInstanceName'];
        }
        if (isset($map['RecoveryInstanceType'])) {
            $model->recoveryInstanceType = $map['RecoveryInstanceType'];
        }
        if (isset($map['RecoveryIpAddress'])) {
            $model->recoveryIpAddress = $map['RecoveryIpAddress'];
        }
        if (isset($map['RecoveryMemory'])) {
            $model->recoveryMemory = $map['RecoveryMemory'];
        }
        if (isset($map['RecoveryNetwork'])) {
            $model->recoveryNetwork = $map['RecoveryNetwork'];
        }
        if (isset($map['RecoveryPostScriptContent'])) {
            $model->recoveryPostScriptContent = $map['RecoveryPostScriptContent'];
        }
        if (isset($map['RecoveryPostScriptType'])) {
            $model->recoveryPostScriptType = $map['RecoveryPostScriptType'];
        }
        if (isset($map['RecoveryReserveIp'])) {
            $model->recoveryReserveIp = $map['RecoveryReserveIp'];
        }
        if (isset($map['RecoveryUseDhcp'])) {
            $model->recoveryUseDhcp = $map['RecoveryUseDhcp'];
        }
        if (isset($map['RecoveryUseEssd'])) {
            $model->recoveryUseEssd = $map['RecoveryUseEssd'];
        }
        if (isset($map['RecoveryUseSsd'])) {
            $model->recoveryUseSsd = $map['RecoveryUseSsd'];
        }
        if (isset($map['ReplicationInfrastructureId'])) {
            $model->replicationInfrastructureId = $map['ReplicationInfrastructureId'];
        }
        if (isset($map['ReplicationInfrastructureType'])) {
            $model->replicationInfrastructureType = $map['ReplicationInfrastructureType'];
        }
        if (isset($map['ReplicationNetwork'])) {
            $model->replicationNetwork = $map['ReplicationNetwork'];
        }
        if (isset($map['ReplicationUseDhcp'])) {
            $model->replicationUseDhcp = $map['ReplicationUseDhcp'];
        }
        if (isset($map['ReplicationUseEssd'])) {
            $model->replicationUseEssd = $map['ReplicationUseEssd'];
        }
        if (isset($map['ReplicationUseOriginalInstance'])) {
            $model->replicationUseOriginalInstance = $map['ReplicationUseOriginalInstance'];
        }
        if (isset($map['ReplicationUseSsd'])) {
            $model->replicationUseSsd = $map['ReplicationUseSsd'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rpo'])) {
            $model->rpo = $map['Rpo'];
        }
        if (isset($map['SecondarySiteId'])) {
            $model->secondarySiteId = $map['SecondarySiteId'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['SourceGatewayVersion'])) {
            $model->sourceGatewayVersion = $map['SourceGatewayVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TargetGatewayVersion'])) {
            $model->targetGatewayVersion = $map['TargetGatewayVersion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TestFailoverStatus'])) {
            $model->testFailoverStatus = $map['TestFailoverStatus'];
        }
        if (isset($map['TestRecoveredInstanceId'])) {
            $model->testRecoveredInstanceId = $map['TestRecoveredInstanceId'];
        }
        if (isset($map['TestRecoveredInstanceName'])) {
            $model->testRecoveredInstanceName = $map['TestRecoveredInstanceName'];
        }
        if (isset($map['TestRecoveredIpAddress'])) {
            $model->testRecoveredIpAddress = $map['TestRecoveredIpAddress'];
        }

        return $model;
    }
}
