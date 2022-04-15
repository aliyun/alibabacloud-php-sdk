<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data;

use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\adaptTarget;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\calculationEvaluationInfo;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\serverInfo;
use AlibabaCloud\Tea\Model;

class adaptRecords extends Model
{
    /**
     * @var int
     */
    public $adaptApplyId;

    /**
     * @var int
     */
    public $adaptRecordId;

    /**
     * @var string
     */
    public $adaptStatus;

    /**
     * @var adaptTarget
     */
    public $adaptTarget;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var calculationEvaluationInfo
     */
    public $calculationEvaluationInfo;

    /**
     * @var float
     */
    public $consumeCu;

    /**
     * @description 蔚领：1 独占虚机，2 支持多开 (EXCLUSIVE: 独占虚机, SHARED: 支持多开)
     *
     * @var string
     */
    public $containerType;

    /**
     * @var string
     */
    public $fileDownloadPath;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var bool
     */
    public $isMustSelect;

    /**
     * @var string
     */
    public $isv;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var serverInfo
     */
    public $serverInfo;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $vmType;
    protected $_name = [
        'adaptApplyId'              => 'AdaptApplyId',
        'adaptRecordId'             => 'AdaptRecordId',
        'adaptStatus'               => 'AdaptStatus',
        'adaptTarget'               => 'AdaptTarget',
        'appId'                     => 'AppId',
        'appVersionId'              => 'AppVersionId',
        'calculationEvaluationInfo' => 'CalculationEvaluationInfo',
        'consumeCu'                 => 'ConsumeCu',
        'containerType'             => 'ContainerType',
        'fileDownloadPath'          => 'FileDownloadPath',
        'gmtCreate'                 => 'GmtCreate',
        'gmtModified'               => 'GmtModified',
        'imageType'                 => 'ImageType',
        'isMustSelect'              => 'IsMustSelect',
        'isv'                       => 'Isv',
        'maxConcurrency'            => 'MaxConcurrency',
        'memo'                      => 'Memo',
        'priority'                  => 'Priority',
        'serverInfo'                => 'ServerInfo',
        'tenantId'                  => 'TenantId',
        'vmType'                    => 'VmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptApplyId) {
            $res['AdaptApplyId'] = $this->adaptApplyId;
        }
        if (null !== $this->adaptRecordId) {
            $res['AdaptRecordId'] = $this->adaptRecordId;
        }
        if (null !== $this->adaptStatus) {
            $res['AdaptStatus'] = $this->adaptStatus;
        }
        if (null !== $this->adaptTarget) {
            $res['AdaptTarget'] = null !== $this->adaptTarget ? $this->adaptTarget->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->calculationEvaluationInfo) {
            $res['CalculationEvaluationInfo'] = null !== $this->calculationEvaluationInfo ? $this->calculationEvaluationInfo->toMap() : null;
        }
        if (null !== $this->consumeCu) {
            $res['ConsumeCu'] = $this->consumeCu;
        }
        if (null !== $this->containerType) {
            $res['ContainerType'] = $this->containerType;
        }
        if (null !== $this->fileDownloadPath) {
            $res['FileDownloadPath'] = $this->fileDownloadPath;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->isMustSelect) {
            $res['IsMustSelect'] = $this->isMustSelect;
        }
        if (null !== $this->isv) {
            $res['Isv'] = $this->isv;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->serverInfo) {
            $res['ServerInfo'] = null !== $this->serverInfo ? $this->serverInfo->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vmType) {
            $res['VmType'] = $this->vmType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adaptRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptApplyId'])) {
            $model->adaptApplyId = $map['AdaptApplyId'];
        }
        if (isset($map['AdaptRecordId'])) {
            $model->adaptRecordId = $map['AdaptRecordId'];
        }
        if (isset($map['AdaptStatus'])) {
            $model->adaptStatus = $map['AdaptStatus'];
        }
        if (isset($map['AdaptTarget'])) {
            $model->adaptTarget = adaptTarget::fromMap($map['AdaptTarget']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['CalculationEvaluationInfo'])) {
            $model->calculationEvaluationInfo = calculationEvaluationInfo::fromMap($map['CalculationEvaluationInfo']);
        }
        if (isset($map['ConsumeCu'])) {
            $model->consumeCu = $map['ConsumeCu'];
        }
        if (isset($map['ContainerType'])) {
            $model->containerType = $map['ContainerType'];
        }
        if (isset($map['FileDownloadPath'])) {
            $model->fileDownloadPath = $map['FileDownloadPath'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['IsMustSelect'])) {
            $model->isMustSelect = $map['IsMustSelect'];
        }
        if (isset($map['Isv'])) {
            $model->isv = $map['Isv'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ServerInfo'])) {
            $model->serverInfo = serverInfo::fromMap($map['ServerInfo']);
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VmType'])) {
            $model->vmType = $map['VmType'];
        }

        return $model;
    }
}
