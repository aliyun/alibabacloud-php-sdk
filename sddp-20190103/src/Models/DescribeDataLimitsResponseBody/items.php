<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description Indicates whether the security audit feature is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @description Indicates whether the data asset can be automatically scanned. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $autoScan;

    /**
     * @description The data detection status. Valid values:
     *
     *   **0**: The data detection is ready.
     *   **1**: The data detection is running.
     *   **2**: The connectivity test is in progress.
     *   **3**: The connectivity test is passed.
     *   **4**: The connectivity test failed.
     *
     * @example 3
     *
     * @var int
     */
    public $checkStatus;

    /**
     * @description The name of the data detection status.
     *
     * @example Connectivity test status
     *
     * @var string
     */
    public $checkStatusName;

    /**
     * @description Indicates whether DSC has the data de-identification permissions on the data asset. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $datamaskStatus;

    /**
     * @description The database engine version.
     *
     * @example 2.0
     *
     * @var string
     */
    public $dbVersion;

    /**
     * @description Indicates whether DSC has the data identification permissions on the data asset. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The type of the database engine. Valid values include **MySQL**, **SQLServer**, **Oracle**, **PostgreSQL**, and **MongoDB**.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The error code.
     *
     * @example connect_network_error
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The reason for the failure.
     *
     * @example The password is invalid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the data leak prevention feature is enabled. Valid values:
     *
     *   **0**: no
     *   **1**: yes (default)
     *
     * @example 1
     *
     * @var int
     */
    public $eventStatus;

    /**
     * @description The time when the data asset was created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 145600000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The unique ID of the data asset.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The description of the instance.
     *
     * @example 123
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The ID of the data asset to which the table belongs.
     *
     * @example 12332
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the last scan is performed.
     *
     *   The value is a UNIX timestamp.
     *   Unit: milliseconds.
     *
     * @example 145600000
     *
     * @var int
     */
    public $lastFinishedTime;

    /**
     * @description The region in which the data asset resides.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The retention period of raw logs. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $logStoreDay;

    /**
     * @description The ID of the member.
     *
     * @example **********8103
     *
     * @var int
     */
    public $memberAccount;

    /**
     * @description The next time when the data asset is scanned. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1676620236000
     *
     * @var int
     */
    public $nextStartTime;

    /**
     * @description Indicates whether the optical character recognition (OCR) feature is enabled. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $ocrStatus;

    /**
     * @description The parent ID of the data asset that you want to query. Valid values include **bucket, db, and project**.
     *
     * @example project
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The port number of the self-managed database.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The status of the data asset scan. Valid values:
     *
     *   **-1**: invalid
     *   **0**: waiting
     *   **1**: being scanned
     *   **2**: suspended
     *   **3**: completed
     *
     * @example 3
     *
     * @var int
     */
    public $processStatus;

    /**
     * @description The total number of data tables or files.
     *
     * @example 100
     *
     * @var int
     */
    public $processTotalCount;

    /**
     * @description The region in which the asset resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the service to which the data asset belongs. Valid values:
     *
     *   **1**: MaxCompute
     *   **2**: OSS
     *   **3**: AnalyticDB for MySQL
     *   **4**: Tablestore
     *   **5**: ApsaraDB RDS
     *   **6**: self-managed database
     *
     * @example 5
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The code of the service to which the data asset belongs. Valid values: **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example RDS
     *
     * @var string
     */
    public $resourceTypeCode;

    /**
     * @description The number of sensitive data samples. Valid values: **0**, **5**, and **10**. Unit: data entries.
     *
     * @example 5
     *
     * @var int
     */
    public $samplingSize;

    /**
     * @description A list of the IDs of the security groups that are used by PrivateLink when you install the DSC agent.
     *
     * @var string[]
     */
    public $securityGroupIdList;

    /**
     * @description Indicates whether the security audit feature is supported. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $supportAudit;

    /**
     * @description Indicates whether the data de-identification feature is supported. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $supportDatamask;

    /**
     * @description Indicates whether anomalous event detection is supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $supportEvent;

    /**
     * @description Indicates whether OCR is supported. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $supportOcr;

    /**
     * @description Indicates whether the data asset scan feature is supported. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $supportScan;

    /**
     * @description The alias of the tenant.
     *
     * @example insta_gram
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The total number of fields in the table.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The username that is used to access the data asset.
     *
     * @example tsts
     *
     * @var string
     */
    public $userName;

    /**
     * @description A list of the IDs of the vSwitches that are used by PrivateLink when you install the DSC agent.
     *
     * @var string[]
     */
    public $vSwitchIdList;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the data asset belongs.
     *
     * @example vpc-2zevcqke6hh09c41****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'auditStatus'         => 'AuditStatus',
        'autoScan'            => 'AutoScan',
        'checkStatus'         => 'CheckStatus',
        'checkStatusName'     => 'CheckStatusName',
        'datamaskStatus'      => 'DatamaskStatus',
        'dbVersion'           => 'DbVersion',
        'enable'              => 'Enable',
        'engineType'          => 'EngineType',
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'eventStatus'         => 'EventStatus',
        'gmtCreate'           => 'GmtCreate',
        'id'                  => 'Id',
        'instanceDescription' => 'InstanceDescription',
        'instanceId'          => 'InstanceId',
        'lastFinishedTime'    => 'LastFinishedTime',
        'localName'           => 'LocalName',
        'logStoreDay'         => 'LogStoreDay',
        'memberAccount'       => 'MemberAccount',
        'nextStartTime'       => 'NextStartTime',
        'ocrStatus'           => 'OcrStatus',
        'parentId'            => 'ParentId',
        'port'                => 'Port',
        'processStatus'       => 'ProcessStatus',
        'processTotalCount'   => 'ProcessTotalCount',
        'regionId'            => 'RegionId',
        'resourceType'        => 'ResourceType',
        'resourceTypeCode'    => 'ResourceTypeCode',
        'samplingSize'        => 'SamplingSize',
        'securityGroupIdList' => 'SecurityGroupIdList',
        'supportAudit'        => 'SupportAudit',
        'supportDatamask'     => 'SupportDatamask',
        'supportEvent'        => 'SupportEvent',
        'supportOcr'          => 'SupportOcr',
        'supportScan'         => 'SupportScan',
        'tenantName'          => 'TenantName',
        'totalCount'          => 'TotalCount',
        'userName'            => 'UserName',
        'vSwitchIdList'       => 'VSwitchIdList',
        'vpcId'               => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->checkStatusName) {
            $res['CheckStatusName'] = $this->checkStatusName;
        }
        if (null !== $this->datamaskStatus) {
            $res['DatamaskStatus'] = $this->datamaskStatus;
        }
        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lastFinishedTime) {
            $res['LastFinishedTime'] = $this->lastFinishedTime;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->logStoreDay) {
            $res['LogStoreDay'] = $this->logStoreDay;
        }
        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }
        if (null !== $this->nextStartTime) {
            $res['NextStartTime'] = $this->nextStartTime;
        }
        if (null !== $this->ocrStatus) {
            $res['OcrStatus'] = $this->ocrStatus;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }
        if (null !== $this->processTotalCount) {
            $res['ProcessTotalCount'] = $this->processTotalCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceTypeCode) {
            $res['ResourceTypeCode'] = $this->resourceTypeCode;
        }
        if (null !== $this->samplingSize) {
            $res['SamplingSize'] = $this->samplingSize;
        }
        if (null !== $this->securityGroupIdList) {
            $res['SecurityGroupIdList'] = $this->securityGroupIdList;
        }
        if (null !== $this->supportAudit) {
            $res['SupportAudit'] = $this->supportAudit;
        }
        if (null !== $this->supportDatamask) {
            $res['SupportDatamask'] = $this->supportDatamask;
        }
        if (null !== $this->supportEvent) {
            $res['SupportEvent'] = $this->supportEvent;
        }
        if (null !== $this->supportOcr) {
            $res['SupportOcr'] = $this->supportOcr;
        }
        if (null !== $this->supportScan) {
            $res['SupportScan'] = $this->supportScan;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vSwitchIdList) {
            $res['VSwitchIdList'] = $this->vSwitchIdList;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckStatusName'])) {
            $model->checkStatusName = $map['CheckStatusName'];
        }
        if (isset($map['DatamaskStatus'])) {
            $model->datamaskStatus = $map['DatamaskStatus'];
        }
        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LastFinishedTime'])) {
            $model->lastFinishedTime = $map['LastFinishedTime'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['LogStoreDay'])) {
            $model->logStoreDay = $map['LogStoreDay'];
        }
        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }
        if (isset($map['NextStartTime'])) {
            $model->nextStartTime = $map['NextStartTime'];
        }
        if (isset($map['OcrStatus'])) {
            $model->ocrStatus = $map['OcrStatus'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }
        if (isset($map['ProcessTotalCount'])) {
            $model->processTotalCount = $map['ProcessTotalCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceTypeCode'])) {
            $model->resourceTypeCode = $map['ResourceTypeCode'];
        }
        if (isset($map['SamplingSize'])) {
            $model->samplingSize = $map['SamplingSize'];
        }
        if (isset($map['SecurityGroupIdList'])) {
            if (!empty($map['SecurityGroupIdList'])) {
                $model->securityGroupIdList = $map['SecurityGroupIdList'];
            }
        }
        if (isset($map['SupportAudit'])) {
            $model->supportAudit = $map['SupportAudit'];
        }
        if (isset($map['SupportDatamask'])) {
            $model->supportDatamask = $map['SupportDatamask'];
        }
        if (isset($map['SupportEvent'])) {
            $model->supportEvent = $map['SupportEvent'];
        }
        if (isset($map['SupportOcr'])) {
            $model->supportOcr = $map['SupportOcr'];
        }
        if (isset($map['SupportScan'])) {
            $model->supportScan = $map['SupportScan'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['VSwitchIdList'])) {
            if (!empty($map['VSwitchIdList'])) {
                $model->vSwitchIdList = $map['VSwitchIdList'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
