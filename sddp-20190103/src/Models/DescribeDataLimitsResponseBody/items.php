<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $autoScan;

    /**
     * @var int
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $checkStatusName;

    /**
     * @var int
     */
    public $datamaskStatus;

    /**
     * @var string
     */
    public $dbVersion;

    /**
     * @var int
     */
    public $enable;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $eventStatus;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastFinishedTime;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var int
     */
    public $logStoreDay;

    /**
     * @var int
     */
    public $nextStartTime;

    /**
     * @var int
     */
    public $ocrStatus;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $processStatus;

    /**
     * @var int
     */
    public $processTotalCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceTypeCode;

    /**
     * @var int
     */
    public $samplingSize;

    /**
     * @var bool
     */
    public $supportAudit;

    /**
     * @var bool
     */
    public $supportDatamask;

    /**
     * @var bool
     */
    public $supportEvent;

    /**
     * @var bool
     */
    public $supportOcr;

    /**
     * @var bool
     */
    public $supportScan;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $userName;
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
        'supportAudit'        => 'SupportAudit',
        'supportDatamask'     => 'SupportDatamask',
        'supportEvent'        => 'SupportEvent',
        'supportOcr'          => 'SupportOcr',
        'supportScan'         => 'SupportScan',
        'tenantName'          => 'TenantName',
        'totalCount'          => 'TotalCount',
        'userName'            => 'UserName',
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

        return $model;
    }
}
