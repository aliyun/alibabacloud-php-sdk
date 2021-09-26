<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $supportEvent;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var int
     */
    public $nextStartTime;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $checkStatusName;

    /**
     * @var int
     */
    public $samplingSize;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var int
     */
    public $datamaskStatus;

    /**
     * @var int
     */
    public $processTotalCount;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $ocrStatus;

    /**
     * @var int
     */
    public $logStoreDay;

    /**
     * @var int
     */
    public $eventStatus;

    /**
     * @var bool
     */
    public $supportScan;

    /**
     * @var int
     */
    public $lastFinishedTime;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var bool
     */
    public $supportOcr;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $dbVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var bool
     */
    public $supportAudit;

    /**
     * @var int
     */
    public $autoScan;

    /**
     * @var string
     */
    public $resourceTypeCode;

    /**
     * @var bool
     */
    public $supportDatamask;

    /**
     * @var int
     */
    public $processStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $enable;
    protected $_name = [
        'supportEvent'        => 'SupportEvent',
        'errorMessage'        => 'ErrorMessage',
        'checkStatus'         => 'CheckStatus',
        'localName'           => 'LocalName',
        'tenantName'          => 'TenantName',
        'nextStartTime'       => 'NextStartTime',
        'port'                => 'Port',
        'checkStatusName'     => 'CheckStatusName',
        'samplingSize'        => 'SamplingSize',
        'parentId'            => 'ParentId',
        'datamaskStatus'      => 'DatamaskStatus',
        'processTotalCount'   => 'ProcessTotalCount',
        'resourceType'        => 'ResourceType',
        'errorCode'           => 'ErrorCode',
        'ocrStatus'           => 'OcrStatus',
        'logStoreDay'         => 'LogStoreDay',
        'eventStatus'         => 'EventStatus',
        'supportScan'         => 'SupportScan',
        'lastFinishedTime'    => 'LastFinishedTime',
        'userName'            => 'UserName',
        'auditStatus'         => 'AuditStatus',
        'supportOcr'          => 'SupportOcr',
        'engineType'          => 'EngineType',
        'instanceId'          => 'InstanceId',
        'totalCount'          => 'TotalCount',
        'instanceDescription' => 'InstanceDescription',
        'dbVersion'           => 'DbVersion',
        'regionId'            => 'RegionId',
        'gmtCreate'           => 'GmtCreate',
        'supportAudit'        => 'SupportAudit',
        'autoScan'            => 'AutoScan',
        'resourceTypeCode'    => 'ResourceTypeCode',
        'supportDatamask'     => 'SupportDatamask',
        'processStatus'       => 'ProcessStatus',
        'id'                  => 'Id',
        'enable'              => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportEvent) {
            $res['SupportEvent'] = $this->supportEvent;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->nextStartTime) {
            $res['NextStartTime'] = $this->nextStartTime;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->checkStatusName) {
            $res['CheckStatusName'] = $this->checkStatusName;
        }
        if (null !== $this->samplingSize) {
            $res['SamplingSize'] = $this->samplingSize;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->datamaskStatus) {
            $res['DatamaskStatus'] = $this->datamaskStatus;
        }
        if (null !== $this->processTotalCount) {
            $res['ProcessTotalCount'] = $this->processTotalCount;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->ocrStatus) {
            $res['OcrStatus'] = $this->ocrStatus;
        }
        if (null !== $this->logStoreDay) {
            $res['LogStoreDay'] = $this->logStoreDay;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->supportScan) {
            $res['SupportScan'] = $this->supportScan;
        }
        if (null !== $this->lastFinishedTime) {
            $res['LastFinishedTime'] = $this->lastFinishedTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->supportOcr) {
            $res['SupportOcr'] = $this->supportOcr;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->supportAudit) {
            $res['SupportAudit'] = $this->supportAudit;
        }
        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
        }
        if (null !== $this->resourceTypeCode) {
            $res['ResourceTypeCode'] = $this->resourceTypeCode;
        }
        if (null !== $this->supportDatamask) {
            $res['SupportDatamask'] = $this->supportDatamask;
        }
        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['SupportEvent'])) {
            $model->supportEvent = $map['SupportEvent'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['NextStartTime'])) {
            $model->nextStartTime = $map['NextStartTime'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['CheckStatusName'])) {
            $model->checkStatusName = $map['CheckStatusName'];
        }
        if (isset($map['SamplingSize'])) {
            $model->samplingSize = $map['SamplingSize'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['DatamaskStatus'])) {
            $model->datamaskStatus = $map['DatamaskStatus'];
        }
        if (isset($map['ProcessTotalCount'])) {
            $model->processTotalCount = $map['ProcessTotalCount'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['OcrStatus'])) {
            $model->ocrStatus = $map['OcrStatus'];
        }
        if (isset($map['LogStoreDay'])) {
            $model->logStoreDay = $map['LogStoreDay'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['SupportScan'])) {
            $model->supportScan = $map['SupportScan'];
        }
        if (isset($map['LastFinishedTime'])) {
            $model->lastFinishedTime = $map['LastFinishedTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['SupportOcr'])) {
            $model->supportOcr = $map['SupportOcr'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['SupportAudit'])) {
            $model->supportAudit = $map['SupportAudit'];
        }
        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
        }
        if (isset($map['ResourceTypeCode'])) {
            $model->resourceTypeCode = $map['ResourceTypeCode'];
        }
        if (isset($map['SupportDatamask'])) {
            $model->supportDatamask = $map['SupportDatamask'];
        }
        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
