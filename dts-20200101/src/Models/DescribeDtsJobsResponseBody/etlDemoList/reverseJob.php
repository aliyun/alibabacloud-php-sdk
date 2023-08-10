<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\performance;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\precheckStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\structureInitializationStatus;
use AlibabaCloud\Tea\Model;

class reverseJob extends Model
{
    /**
     * @description The start offset of incremental data synchronization. This value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1616980369
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description The time when the task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-03-16T08:01:19Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The state of initial full data synchronization.
     *
     * @var dataInitializationStatus
     */
    public $dataInitializationStatus;

    /**
     * @description The state of incremental data synchronization.
     *
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;

    /**
     * @description The schema of the objects that you want to synchronize. The value is a JSON string and can contain regular expressions. For more information, see Objects of DTS tasks.
     *
     * @example {"dtstestdata": { "name": "dtstestdata", "all": true }}
     *
     * @var string
     */
    public $dbObject;

    /**
     * @description The latency of incremental data synchronization. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $delay;

    /**
     * @description The connection settings of the destination instance.
     *
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @description The ID of the data synchronization instance.
     *
     * @example dtsi03e3zty16i****
     *
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @description The instance class.
     *
     * > For more information about the test performance of each instance class, see [Specifications of data synchronization instances](~~26605~~).
     * @example large
     *
     * @var string
     */
    public $dtsJobClass;

    /**
     * @description The synchronization direction. **Reverse** is returned.
     *
     * @example Reverse
     *
     * @var string
     */
    public $dtsJobDirection;

    /**
     * @description The ID of the synchronization task.
     *
     * @example i03e3zty16i****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The name of the data synchronization task.
     *
     * @example RDS_TO_RDS_MIGRATION
     *
     * @var string
     */
    public $dtsJobName;

    /**
     * @description The error message returned if the task failed.
     *
     * @example DTS-070211: Connect Source DB failed. cause by [com.mysql.jdbc.exceptions.jdbc4.MySQLNonTransientConnectionException:Could not create connection to database server. Attempted reconnect 3 times. Giving up.][com.mysql.jdbc.exceptions.jdbc4.CommunicationsException:Communications link failure\n\nThe last packet sent successfully to the server was 0 milliseconds ago. The driver has not received any packets from the server.][java.net.ConnectException:Connection timed out (Connection timed out)] About more information in [https://yq.aliyun.com/articles/499178].
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The checkpoint of the ETL task.
     *
     * @example 1610540493
     *
     * @var string
     */
    public $etlSafeCheckpoint;

    /**
     * @description The time when the instance expires. The time follows the ISO 8601 standard in the* yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * > This parameter is returned only if the returned value of **PayType** is **PrePaid**.
     * @example 2022-03-16T08:01:19Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The migration types or initial synchronization types.
     *
     * @var migrationMode
     */
    public $migrationMode;

    /**
     * @description The billing method of the DTS instance. Valid values:
     *
     * - **PrePaid**: subscription
     * - **PostPaid**: pay-as-you-go
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The performance of the data migration or synchronization instance.
     *
     * @var performance
     */
    public $performance;

    /**
     * @description The precheck state.
     *
     * @var precheckStatus
     */
    public $precheckStatus;

    /**
     * @description The reserved parameter of DTS. The value is a JSON string. You can specify this parameter to meet specific requirements, for example, whether to automatically start a precheck. For more information, see [MigrationReserved](~~176470~~).
     *
     * @example {\"srcHostPorts\":\"\",\"whitelist.dms.online.ddl.enable\":false,\"filterDDL\":false,\"sqlparser.dms.original.ddl\":true,\"srcOracleType\":\"sid\",\"maxRetryTime\":43200,\"destSSL\":\"0\",\"destOracleType\":\"sid\",\"srcSSL\":\"0\",\"dbListCaseChangeMode\":\"default\",\"SourceEngineVersion\":\"8.0.18\",\"srcNetType\":\"VPC\",\"destNetType\":\"VPC\",\"srcVpcNetMappingInst\":\"172.16.1**.**:10803\",\"destVpcNetMappingInst\":\"172.16.1**.**:11077\",\"useJobTask\":\"1\"}
     *
     * @var string
     */
    public $reserved;

    /**
     * @description The connection settings of the source instance.
     *
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The state of the DTS instance. For more information about the valid values, see the description of the request parameter **Status**.
     *
     * @example Synchronizing
     *
     * @var string
     */
    public $status;

    /**
     * @description The state of initial schema synchronization.
     *
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;
    protected $_name = [
        'checkpoint'                    => 'Checkpoint',
        'createTime'                    => 'CreateTime',
        'dataInitializationStatus'      => 'DataInitializationStatus',
        'dataSynchronizationStatus'     => 'DataSynchronizationStatus',
        'dbObject'                      => 'DbObject',
        'delay'                         => 'Delay',
        'destinationEndpoint'           => 'DestinationEndpoint',
        'dtsInstanceID'                 => 'DtsInstanceID',
        'dtsJobClass'                   => 'DtsJobClass',
        'dtsJobDirection'               => 'DtsJobDirection',
        'dtsJobId'                      => 'DtsJobId',
        'dtsJobName'                    => 'DtsJobName',
        'errorMessage'                  => 'ErrorMessage',
        'etlSafeCheckpoint'             => 'EtlSafeCheckpoint',
        'expireTime'                    => 'ExpireTime',
        'migrationMode'                 => 'MigrationMode',
        'payType'                       => 'PayType',
        'performance'                   => 'Performance',
        'precheckStatus'                => 'PrecheckStatus',
        'reserved'                      => 'Reserved',
        'sourceEndpoint'                => 'SourceEndpoint',
        'status'                        => 'Status',
        'structureInitializationStatus' => 'StructureInitializationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataInitializationStatus) {
            $res['DataInitializationStatus'] = null !== $this->dataInitializationStatus ? $this->dataInitializationStatus->toMap() : null;
        }
        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toMap() : null;
        }
        if (null !== $this->dbObject) {
            $res['DbObject'] = $this->dbObject;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->dtsInstanceID) {
            $res['DtsInstanceID'] = $this->dtsInstanceID;
        }
        if (null !== $this->dtsJobClass) {
            $res['DtsJobClass'] = $this->dtsJobClass;
        }
        if (null !== $this->dtsJobDirection) {
            $res['DtsJobDirection'] = $this->dtsJobDirection;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->etlSafeCheckpoint) {
            $res['EtlSafeCheckpoint'] = $this->etlSafeCheckpoint;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toMap() : null;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toMap() : null;
        }
        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = null !== $this->precheckStatus ? $this->precheckStatus->toMap() : null;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reverseJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataInitializationStatus'])) {
            $model->dataInitializationStatus = dataInitializationStatus::fromMap($map['DataInitializationStatus']);
        }
        if (isset($map['DataSynchronizationStatus'])) {
            $model->dataSynchronizationStatus = dataSynchronizationStatus::fromMap($map['DataSynchronizationStatus']);
        }
        if (isset($map['DbObject'])) {
            $model->dbObject = $map['DbObject'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['DtsInstanceID'])) {
            $model->dtsInstanceID = $map['DtsInstanceID'];
        }
        if (isset($map['DtsJobClass'])) {
            $model->dtsJobClass = $map['DtsJobClass'];
        }
        if (isset($map['DtsJobDirection'])) {
            $model->dtsJobDirection = $map['DtsJobDirection'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['EtlSafeCheckpoint'])) {
            $model->etlSafeCheckpoint = $map['EtlSafeCheckpoint'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['MigrationMode'])) {
            $model->migrationMode = migrationMode::fromMap($map['MigrationMode']);
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Performance'])) {
            $model->performance = performance::fromMap($map['Performance']);
        }
        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = precheckStatus::fromMap($map['PrecheckStatus']);
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StructureInitializationStatus'])) {
            $model->structureInitializationStatus = structureInitializationStatus::fromMap($map['StructureInitializationStatus']);
        }

        return $model;
    }
}
