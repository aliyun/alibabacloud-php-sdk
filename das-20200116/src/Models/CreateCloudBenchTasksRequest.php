<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudBenchTasksRequest extends Model
{
    /**
     * @description The total number of stress testing tasks that you want to create. Valid values: **0** to **30**. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $amount;

    /**
     * @description The ID of the backup set. You can call the [DescribeBackups](~~26273~~) operation to query the ID of the backup set.
     *
     * @example 229132
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The time when the backup starts. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2021-04-23T13:22:14Z
     *
     * @var string
     */
    public $backupTime;

    /**
     * @description The type of the stress testing client. Valid values:
     *
     *   **ECS**: indicates that you must create the [DBGateway](~~64905~~).
     *   **DAS_ECS**: indicates that DAS automatically purchases and deploys an Elastic Compute Service (ECS) instance for stress testing.
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
     * @description The endpoint of the destination instance. The specified endpoint must be the endpoint of an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL instance.
     *
     * >  This parameter takes effect only if you set **DstType** to **ConnectionString**.
     * @example rm-de21209****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $dstConnectionString;

    /**
     * @description The ID of the destination instance. The instance must be an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL instance. You can call the [GetInstanceInspections](~~202857~~) operation to query the ID.
     *
     * >  This parameter must be specified if you set **DstType** to **Instance**.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $dstInstanceId;

    /**
     * @description The port number of the instance that you want to access.
     *
     * >  This parameter takes effect only if you set **DstType** to **ConnectionString**.
     * @example 3306
     *
     * @var string
     */
    public $dstPort;

    /**
     * @description The name of the privileged account for the destination instance.
     *
     * @example root
     *
     * @var string
     */
    public $dstSuperAccount;

    /**
     * @description The password of the privileged account for the destination instance.
     *
     * @example test123
     *
     * @var string
     */
    public $dstSuperPassword;

    /**
     * @description The type of the identifier that is used to indicate the destination instance. Valid values:
     *
     *   **Instance**: the instance ID. This is the default value.
     *   **ConnectionString**: the endpoint of the instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $dstType;

    /**
     * @description The specification of the Data Transmission Service (DTS) migration task. You can call the [DescribeCloudbenchTask](~~230669~~) operation to query the specification.
     *
     * >  You must migrate the basic data in the source instance to the destination instance before you start a stress testing task. When you create a DTS migration task, you must specify this parameter.
     * @example medium
     *
     * @var string
     */
    public $dtsJobClass;

    /**
     * @description The ID of the DTS migration task. You can call the [ConfigureDtsJob](~~208399~~) operation to query the ID.
     *
     * >  After a DTS migration task is created in the DTS console, you must specify this parameter.
     * @example 23127
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The state that specifies the last operation that is performed for the stress testing task. Valid values:
     *
     *   **WAIT_TARGET**: prepares the destination instance
     *   **WAIT_DBGATEWAY**: prepares the DBGateway
     *   **WAIT_SQL**: prepares the full SQL statistics
     *   **WAIT_LOGIC**: prepares to replay the traffic
     *
     * >  When the state of a stress testing task changes to the state that is specified by the EndState parameter, the stress testing task becomes completed.
     * @example WAIT_TARGET
     *
     * @var string
     */
    public $endState;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the database gateway (DBGateway) is deployed.
     *
     * >  This parameter must be specified if you set **ClientType** to **ECS**.
     * @example vpc-t4nsnwvpbc1h76ja4****
     *
     * @var string
     */
    public $gatewayVpcId;

    /**
     * @description The IP address or domain name of the DBGateway.
     *
     * >  This parameter must be specified if you set **ClientType** to **ECS**.
     * @example 172.30.XX.XX
     *
     * @var string
     */
    public $gatewayVpcIp;

    /**
     * @description The rate at which the traffic captured from the source instance is replayed on the destination instance. The value must be a positive integer. Valid values: **1** to **30**. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $rate;

    /**
     * @description The duration of the stress testing task for which the traffic is captured from the source instance. Unit: milliseconds.
     *
     * @example 86400000
     *
     * @var string
     */
    public $requestDuration;

    /**
     * @description The time when the stress testing task ends. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1608888296001
     *
     * @var string
     */
    public $requestEndTime;

    /**
     * @description The time when the stress testing task starts. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1608888296000
     *
     * @var string
     */
    public $requestStartTime;

    /**
     * @description The duration within which the traffic generation stressing test takes effect. Unit: milliseconds.
     *
     * >  This parameter must be specified if you set **TaskType** to **smart pressure test**.
     * @example 86400000
     *
     * @var string
     */
    public $smartPressureTime;

    /**
     * @description The ID of the source instance. The instance must be an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL instance. You can call the [GetInstanceInspections](~~202857~~) operation to query the ID.
     *
     * >  This parameter must be specified if you set **DstType** to **Instance**.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $srcInstanceId;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $srcPublicIp;

    /**
     * @description The name of the privileged account for the source instance. Set the value to **admin**.
     *
     * >  This parameter must be specified if you set **DstType** to **Instance**.
     * @example admin
     *
     * @var string
     */
    public $srcSuperAccount;

    /**
     * @description The password of the privileged account for the source instance.
     *
     * >  This parameter must be specified if you set **DstType** to **Instance**.
     * @example test123
     *
     * @var string
     */
    public $srcSuperPassword;

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
     * @description The temporary directory generated for stress testing.
     *
     * @example /tmp/bench/
     *
     * @var string
     */
    public $workDir;
    protected $_name = [
        'amount'              => 'Amount',
        'backupId'            => 'BackupId',
        'backupTime'          => 'BackupTime',
        'clientType'          => 'ClientType',
        'description'         => 'Description',
        'dstConnectionString' => 'DstConnectionString',
        'dstInstanceId'       => 'DstInstanceId',
        'dstPort'             => 'DstPort',
        'dstSuperAccount'     => 'DstSuperAccount',
        'dstSuperPassword'    => 'DstSuperPassword',
        'dstType'             => 'DstType',
        'dtsJobClass'         => 'DtsJobClass',
        'dtsJobId'            => 'DtsJobId',
        'endState'            => 'EndState',
        'gatewayVpcId'        => 'GatewayVpcId',
        'gatewayVpcIp'        => 'GatewayVpcIp',
        'rate'                => 'Rate',
        'requestDuration'     => 'RequestDuration',
        'requestEndTime'      => 'RequestEndTime',
        'requestStartTime'    => 'RequestStartTime',
        'smartPressureTime'   => 'SmartPressureTime',
        'srcInstanceId'       => 'SrcInstanceId',
        'srcPublicIp'         => 'SrcPublicIp',
        'srcSuperAccount'     => 'SrcSuperAccount',
        'srcSuperPassword'    => 'SrcSuperPassword',
        'taskType'            => 'TaskType',
        'workDir'             => 'WorkDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupTime) {
            $res['BackupTime'] = $this->backupTime;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dstConnectionString) {
            $res['DstConnectionString'] = $this->dstConnectionString;
        }
        if (null !== $this->dstInstanceId) {
            $res['DstInstanceId'] = $this->dstInstanceId;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->dstSuperAccount) {
            $res['DstSuperAccount'] = $this->dstSuperAccount;
        }
        if (null !== $this->dstSuperPassword) {
            $res['DstSuperPassword'] = $this->dstSuperPassword;
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
        if (null !== $this->endState) {
            $res['EndState'] = $this->endState;
        }
        if (null !== $this->gatewayVpcId) {
            $res['GatewayVpcId'] = $this->gatewayVpcId;
        }
        if (null !== $this->gatewayVpcIp) {
            $res['GatewayVpcIp'] = $this->gatewayVpcIp;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->requestDuration) {
            $res['RequestDuration'] = $this->requestDuration;
        }
        if (null !== $this->requestEndTime) {
            $res['RequestEndTime'] = $this->requestEndTime;
        }
        if (null !== $this->requestStartTime) {
            $res['RequestStartTime'] = $this->requestStartTime;
        }
        if (null !== $this->smartPressureTime) {
            $res['SmartPressureTime'] = $this->smartPressureTime;
        }
        if (null !== $this->srcInstanceId) {
            $res['SrcInstanceId'] = $this->srcInstanceId;
        }
        if (null !== $this->srcPublicIp) {
            $res['SrcPublicIp'] = $this->srcPublicIp;
        }
        if (null !== $this->srcSuperAccount) {
            $res['SrcSuperAccount'] = $this->srcSuperAccount;
        }
        if (null !== $this->srcSuperPassword) {
            $res['SrcSuperPassword'] = $this->srcSuperPassword;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudBenchTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupTime'])) {
            $model->backupTime = $map['BackupTime'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DstConnectionString'])) {
            $model->dstConnectionString = $map['DstConnectionString'];
        }
        if (isset($map['DstInstanceId'])) {
            $model->dstInstanceId = $map['DstInstanceId'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['DstSuperAccount'])) {
            $model->dstSuperAccount = $map['DstSuperAccount'];
        }
        if (isset($map['DstSuperPassword'])) {
            $model->dstSuperPassword = $map['DstSuperPassword'];
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
        if (isset($map['EndState'])) {
            $model->endState = $map['EndState'];
        }
        if (isset($map['GatewayVpcId'])) {
            $model->gatewayVpcId = $map['GatewayVpcId'];
        }
        if (isset($map['GatewayVpcIp'])) {
            $model->gatewayVpcIp = $map['GatewayVpcIp'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['RequestDuration'])) {
            $model->requestDuration = $map['RequestDuration'];
        }
        if (isset($map['RequestEndTime'])) {
            $model->requestEndTime = $map['RequestEndTime'];
        }
        if (isset($map['RequestStartTime'])) {
            $model->requestStartTime = $map['RequestStartTime'];
        }
        if (isset($map['SmartPressureTime'])) {
            $model->smartPressureTime = $map['SmartPressureTime'];
        }
        if (isset($map['SrcInstanceId'])) {
            $model->srcInstanceId = $map['SrcInstanceId'];
        }
        if (isset($map['SrcPublicIp'])) {
            $model->srcPublicIp = $map['SrcPublicIp'];
        }
        if (isset($map['SrcSuperAccount'])) {
            $model->srcSuperAccount = $map['SrcSuperAccount'];
        }
        if (isset($map['SrcSuperPassword'])) {
            $model->srcSuperPassword = $map['SrcSuperPassword'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        return $model;
    }
}
