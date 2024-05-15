<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudbenchTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the archiving task.
     *
     * @example \\"202105211430070112231480820340758****
     *
     * @var string
     */
    public $archiveJobId;

    /**
     * @description The name of the table that was archived to Object Storage Service (OSS).
     *
     * @example custins15546355_161604665****
     *
     * @var string
     */
    public $archiveOssTableName;

    /**
     * @description The archiving state of the file that stores the analysis result of full SQL statistics. Valid values:
     *
     *   **0**: The file archiving is not started.
     *   **1**: The file is archived.
     *   **2**: An error occurred.
     *   **3**: The file is being archived.
     *   **4**: The archived file does not need to be downloaded.
     *
     * @example 1
     *
     * @var int
     */
    public $archiveState;

    /**
     * @description The ID of the backup set. You can call the [DescribeBackups](https://help.aliyun.com/document_detail/26273.html) operation to query the ID of the backup set.
     *
     * @example 229132
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The backup type. Valid values:
     *
     *   **TIMESTAMP**
     *   **BACKUPID**
     *
     * @example TIMESTAMP
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The substep in the stress testing task. Valid values:
     *
     *   **NEW**: initializes the stress testing task.
     *   **WAIT_BUY_ECS**: purchases an ECS instance.
     *   **WAIT_START_ECS**: starts an ECS instance.
     *   **WAIT_INSTALL_JDK**: installs the Java Development Kit (JDK).
     *   **WAIT_INSTALL_DBGATEWAY**: installs the database gateway (DBGateway).
     *   **ADD_SECURITY_IPS_STEP**: configure a security group whitelist.
     *   **ARCHIVE**: archives the full SQL statistics.
     *   **DOWNLOAD**: downloads the file that stores the analysis result of full SQL statistics.
     *   **PROCEED**: preprocesses the file that stores the analysis result of full SQL statistics.
     *   **PRE_LOAD**: preloads the file that stores the analysis result of full SQL statistics.
     *   **VALIDATE**: verifies the functionality of stress testing.
     *   **PRESSURE**: starts the stress testing task.
     *
     * @example PROCEED
     *
     * @var string
     */
    public $benchStep;

    /**
     * @description The status that indicates the substep performed on the stress testing task. Valid values:
     *
     *   **NEW**: The task is being initialized.
     *   **RUNNING**: The task is running.
     *   **FAILED**: The task failed.
     *   **FINISHED**: The task is complete.
     *   **Terminated**: The task is terminated.
     *   **Deleted**: The task is deleted.
     *
     * @example FINISHED
     *
     * @var string
     */
    public $benchStepStatus;

    /**
     * @description The DBGateway ID of the stress testing client.
     *
     * @example 58598b2af48a0193dfc16fc6964ef****
     *
     * @var string
     */
    public $clientGatewayId;

    /**
     * @description The type of the stress testing client. Valid values:
     *
     *   **ECS**: indicates that you must create the [DBGateway](https://help.aliyun.com/document_detail/64905.html).
     *   **DAS_ECS**: indicates that DAS automatically purchases and deploys an ECS instance for stress testing.
     *
     * @example ECS
     *
     * @var string
     */
    public $clientType;

    /**
     * @description The description of the stress testing task.
     *
     * @example test-das-bench-0501
     *
     * @var string
     */
    public $description;

    /**
     * @description The UUID of the destination instance.
     *
     * @example hdm_d887b5ccf99fa0dc9a1e5aaac368****
     *
     * @var string
     */
    public $dstInstanceUuid;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $dstIp;

    /**
     * @description The port number of the destination instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $dstPort;

    /**
     * @description The type of the identifier that is used to indicate the destination instance. Valid values:
     *
     *   **Instance** (default): the instance ID.
     *   **ConnectionString**: the endpoint of the instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $dstType;

    /**
     * @description The specification of the DTS task.
     *
     * @example medium
     *
     * @var string
     */
    public $dtsJobClass;

    /**
     * @description The ID of the DTS migration task.
     *
     * @example i03e3zty16i****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The name of the Data Transmission Service (DTS) task.
     *
     * @example RDS_TO_RDS_MIGRATION
     *
     * @var string
     */
    public $dtsJobName;

    /**
     * @description The state of the DTS task. Valid values:
     *
     *   **NOT_STARTED**: The task is not started.
     *   **PRE_CHECKING**: The task is in precheck.
     *   **PRE_CHECK_FAILED**: The precheck failed.
     *   **CHECKING**: The task is being checked.
     *   **MIGRATING**: The data is being migrated.
     *   **CATCHED**: The data is migrated from the source instance to the destination instance.
     *   **SUSPENDING**: The task is suspended.
     *   **MIGRATION_FAILED**: The data failed to be migrated.
     *   **FINISHED**: The task is complete.
     *   **INITIALIZING**: The synchronization is being initialized.
     *   **INITIALIZE_FAILED**: The synchronization failed to be initialized.
     *   **SYNCHRONIZING**: The data is being synchronized.
     *   **MODIFYING**: The objects to be synchronized are being changed.
     *   **SWITCHING**: The roles of the instances are being switched.
     *   **FAILED**: The task failed.
     *
     * @example CHECKING
     *
     * @var int
     */
    public $dtsJobState;

    /**
     * @description The state of the DTS task. Valid values:
     *
     *   **NOT_STARTED**: The task is not started.
     *   **PRE_CHECKING**: The task is in precheck.
     *   **PRE_CHECK_FAILED**: The precheck failed.
     *   **CHECKING**: The task is being checked.
     *   **MIGRATING**: The data is being migrated.
     *   **CATCHED**: The data is migrated from the source instance to the destination instance.
     *   **SUSPENDING**: The task is suspended.
     *   **MIGRATION_FAILED**: The data failed to be migrated.
     *   **FINISHED**: The task is complete.
     *   **INITIALIZING**: The synchronization is being initialized.
     *   **INITIALIZE_FAILED**: The synchronization failed to be initialized.
     *   **SYNCHRONIZING**: The data is being synchronized.
     *   **MODIFYING**: The objects to be synchronized are being changed.
     *   **SWITCHING**: The roles of the instances are being switched.
     *   **FAILED**: The task failed.
     *
     * @example PRE_CHECKING
     *
     * @var string
     */
    public $dtsJobStatus;

    /**
     * @description The ID of the Elastic Compute Service (ECS) instance.
     *
     * @example i-bp1ecr5go2go1****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The state that specifies the last operation that is performed for the stress testing task. Valid values:
     *
     *   **WAIT_TARGET**: prepares the destination instance.
     *   **WAIT_DBGATEWAY**: prepares the DBGateway.
     *   **WAIT_SQL**: prepares the full SQL statistics.
     *   **WAIT_LOGIC**: prepares to replay the traffic.
     *
     * >  When the state of a stress testing task changes to the state that is specified by the EndState parameter, the stress testing task becomes completed.
     * @example WAIT_LOGIC
     *
     * @var string
     */
    public $endState;

    /**
     * @description The error code returned for the substep of the stress testing task.
     *
     * @example 10910
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example DTS-070211: Connect Source DB failed. cause by [com.mysql.jdbc.exceptions.jdbc4.MySQLNonTransientConnectionException:Could not create connection to database server. Attempted reconnect 3 times. Giving up.][com.mysql.jdbc.exceptions.jdbc4.CommunicationsException:Communications link failure\\n\\nThe last packet sent successfully to the server was 0 milliseconds ago. The driver has not received any packets from the server.][java.net.ConnectException:Connection timed out (Connection timed out)] About more information in [https://yq.aliyun.com/articles/499178].
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The additional information.
     *
     * @example Null
     *
     * @var string
     */
    public $external;

    /**
     * @description The rate at which the stress testing task replayed the traffic. The value is a positive integer. Valid values:**1** to **30**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $rate;

    /**
     * @description The duration of the stress testing task for which traffic was captured from the source instance.
     *
     * @example 864000
     *
     * @var int
     */
    public $requestDuration;

    /**
     * @description The duration of the stress testing task for which the traffic was generated on the destination instance. Unit: milliseconds.
     *
     * @example 86400000
     *
     * @var int
     */
    public $smartPressureTime;

    /**
     * @description The source of the task. Valid values:
     *
     *   **DAS**
     *   **OPEN_API**
     *
     * @example DAS
     *
     * @var string
     */
    public $source;

    /**
     * @description The reuse information about the analysis result of full SQL statistics.
     *
     * @example {"sqlUuid":"task_a37d2f07-45cb-****-a2a6-c66c62****","metaUuid":"task_211e2561-5c0c-486b-864c-56b511****","sqlFile":"cl-1620057600000-1800626.sc","metaFile":"cl-1620057600000-180****.meta"}
     *
     * @var string
     */
    public $sqlCompleteReuse;

    /**
     * @description The database type of the source instance. Valid values:
     *
     * @example RDS
     *
     * @var string
     */
    public $srcInstanceArea;

    /**
     * @description The UUID of the source instance.
     *
     * @example a364e414-e68b-4e5c-9166-65b3a153****
     *
     * @var string
     */
    public $srcInstanceUuid;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $srcPublicIp;

    /**
     * @description The state that indicates the operation performed for the stress testing task. Valid values:
     *
     *   **WAIT_TARGET**: prepares the destination instance.
     *   **WAIT_DBGATEWAY**: prepares the DBGateway.
     *   **WAIT_SQL**: prepares the full SQL statistics.
     *   **WAIT_LOGIC**: prepares to replay the traffic.
     *
     * @example WAIT_TARGET
     *
     * @var string
     */
    public $state;

    /**
     * @description The state of the stress testing task. Valid values:
     *
     *   **SUCCESS**: The task is successful.
     *   **IGNORED**: The task is ignored.
     *   **RUNNING**: The task is running.
     *   **EXCEPTION**: An error occurred.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the table that is used for stress testing.
     *
     * @example [{"TABLE_NAME":"customer1","TABLE_SCHEMA":"tpcc"}]
     *
     * @var string
     */
    public $tableSchema;

    /**
     * @description The task ID.
     *
     * @example e5cec704-0518-430f-8263-76f4dcds****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the stress testing task. Valid values:
     *
     *   **pressure test** (default): A task of this type replays the traffic that is captured from the source instance on the destination instance at the maximum playback rate that is supported by the destination instance.
     *   **smart pressure test**: A task of this type analyzes the traffic that is captured from the source instance over a short period of time and generates traffic on the destination instance for continuous stress testing. The business model based on which the traffic is generated on the destination instance and the traffic distribution are consistent with those on the source instance. Stress testing tasks of this type can help you reduce the amount of time that is consumed to collect data from the source instance and reduce storage costs and performance overheads.
     *
     * @example pressure test
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The topic that contains the consumed data. This topic is a topic in Message Queue for Apache Kafka.
     *
     * @example das
     *
     * @var string
     */
    public $topic;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 109141182625****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The version of the stress testing task. Valid values:
     *
     *   **V2.0**
     *   **V3.0**
     *
     * @example V3.0
     *
     * @var string
     */
    public $version;

    /**
     * @description The temporary directory generated for stress testing.
     *
     * @example /tmp/bench/
     *
     * @var string
     */
    public $workDir;
    protected $_name = [
        'archiveJobId'        => 'ArchiveJobId',
        'archiveOssTableName' => 'ArchiveOssTableName',
        'archiveState'        => 'ArchiveState',
        'backupId'            => 'BackupId',
        'backupType'          => 'BackupType',
        'benchStep'           => 'BenchStep',
        'benchStepStatus'     => 'BenchStepStatus',
        'clientGatewayId'     => 'ClientGatewayId',
        'clientType'          => 'ClientType',
        'description'         => 'Description',
        'dstInstanceUuid'     => 'DstInstanceUuid',
        'dstIp'               => 'DstIp',
        'dstPort'             => 'DstPort',
        'dstType'             => 'DstType',
        'dtsJobClass'         => 'DtsJobClass',
        'dtsJobId'            => 'DtsJobId',
        'dtsJobName'          => 'DtsJobName',
        'dtsJobState'         => 'DtsJobState',
        'dtsJobStatus'        => 'DtsJobStatus',
        'ecsInstanceId'       => 'EcsInstanceId',
        'endState'            => 'EndState',
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'external'            => 'External',
        'rate'                => 'Rate',
        'requestDuration'     => 'RequestDuration',
        'smartPressureTime'   => 'SmartPressureTime',
        'source'              => 'Source',
        'sqlCompleteReuse'    => 'SqlCompleteReuse',
        'srcInstanceArea'     => 'SrcInstanceArea',
        'srcInstanceUuid'     => 'SrcInstanceUuid',
        'srcPublicIp'         => 'SrcPublicIp',
        'state'               => 'State',
        'status'              => 'Status',
        'tableSchema'         => 'TableSchema',
        'taskId'              => 'TaskId',
        'taskType'            => 'TaskType',
        'topic'               => 'Topic',
        'userId'              => 'UserId',
        'version'             => 'Version',
        'workDir'             => 'WorkDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveJobId) {
            $res['ArchiveJobId'] = $this->archiveJobId;
        }
        if (null !== $this->archiveOssTableName) {
            $res['ArchiveOssTableName'] = $this->archiveOssTableName;
        }
        if (null !== $this->archiveState) {
            $res['ArchiveState'] = $this->archiveState;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->benchStep) {
            $res['BenchStep'] = $this->benchStep;
        }
        if (null !== $this->benchStepStatus) {
            $res['BenchStepStatus'] = $this->benchStepStatus;
        }
        if (null !== $this->clientGatewayId) {
            $res['ClientGatewayId'] = $this->clientGatewayId;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dstInstanceUuid) {
            $res['DstInstanceUuid'] = $this->dstInstanceUuid;
        }
        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }
        if (null !== $this->dtsJobClass) {
            $res['DtsJobClass'] = $this->dtsJobClass;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }
        if (null !== $this->dtsJobState) {
            $res['DtsJobState'] = $this->dtsJobState;
        }
        if (null !== $this->dtsJobStatus) {
            $res['DtsJobStatus'] = $this->dtsJobStatus;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->endState) {
            $res['EndState'] = $this->endState;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->external) {
            $res['External'] = $this->external;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->requestDuration) {
            $res['RequestDuration'] = $this->requestDuration;
        }
        if (null !== $this->smartPressureTime) {
            $res['SmartPressureTime'] = $this->smartPressureTime;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sqlCompleteReuse) {
            $res['SqlCompleteReuse'] = $this->sqlCompleteReuse;
        }
        if (null !== $this->srcInstanceArea) {
            $res['SrcInstanceArea'] = $this->srcInstanceArea;
        }
        if (null !== $this->srcInstanceUuid) {
            $res['SrcInstanceUuid'] = $this->srcInstanceUuid;
        }
        if (null !== $this->srcPublicIp) {
            $res['SrcPublicIp'] = $this->srcPublicIp;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tableSchema) {
            $res['TableSchema'] = $this->tableSchema;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveJobId'])) {
            $model->archiveJobId = $map['ArchiveJobId'];
        }
        if (isset($map['ArchiveOssTableName'])) {
            $model->archiveOssTableName = $map['ArchiveOssTableName'];
        }
        if (isset($map['ArchiveState'])) {
            $model->archiveState = $map['ArchiveState'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BenchStep'])) {
            $model->benchStep = $map['BenchStep'];
        }
        if (isset($map['BenchStepStatus'])) {
            $model->benchStepStatus = $map['BenchStepStatus'];
        }
        if (isset($map['ClientGatewayId'])) {
            $model->clientGatewayId = $map['ClientGatewayId'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DstInstanceUuid'])) {
            $model->dstInstanceUuid = $map['DstInstanceUuid'];
        }
        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }
        if (isset($map['DtsJobClass'])) {
            $model->dtsJobClass = $map['DtsJobClass'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }
        if (isset($map['DtsJobState'])) {
            $model->dtsJobState = $map['DtsJobState'];
        }
        if (isset($map['DtsJobStatus'])) {
            $model->dtsJobStatus = $map['DtsJobStatus'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['EndState'])) {
            $model->endState = $map['EndState'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['External'])) {
            $model->external = $map['External'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['RequestDuration'])) {
            $model->requestDuration = $map['RequestDuration'];
        }
        if (isset($map['SmartPressureTime'])) {
            $model->smartPressureTime = $map['SmartPressureTime'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SqlCompleteReuse'])) {
            $model->sqlCompleteReuse = $map['SqlCompleteReuse'];
        }
        if (isset($map['SrcInstanceArea'])) {
            $model->srcInstanceArea = $map['SrcInstanceArea'];
        }
        if (isset($map['SrcInstanceUuid'])) {
            $model->srcInstanceUuid = $map['SrcInstanceUuid'];
        }
        if (isset($map['SrcPublicIp'])) {
            $model->srcPublicIp = $map['SrcPublicIp'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TableSchema'])) {
            $model->tableSchema = $map['TableSchema'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        return $model;
    }
}
