<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTaskConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTaskConfigResponseBody\data\dataCheckConfig;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTaskConfigResponseBody\data\scopeFilter;

class data extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var string
     */
    public $checkGlobalParams;

    /**
     * @var string
     */
    public $checkTemplateId;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $cronExp;

    /**
     * @var dataCheckConfig[]
     */
    public $dataCheckConfig;

    /**
     * @var string
     */
    public $dstDsId;

    /**
     * @var string
     */
    public $dstDsName;

    /**
     * @var string
     */
    public $dstDsType;

    /**
     * @var string
     */
    public $dstEngineId;

    /**
     * @var string
     */
    public $dstEngineName;

    /**
     * @var string
     */
    public $dstEngineType;

    /**
     * @var int
     */
    public $executeType;

    /**
     * @var int
     */
    public $fullTableCount;

    /**
     * @var float
     */
    public $groupCountThreshold;

    /**
     * @var int
     */
    public $isBuiltin;

    /**
     * @var int
     */
    public $isScheduled;

    /**
     * @var int
     */
    public $isWhiteList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $scheduleId;

    /**
     * @var scopeFilter
     */
    public $scopeFilter;

    /**
     * @var string
     */
    public $sourceGlobalParams;

    /**
     * @var string
     */
    public $srcDsId;

    /**
     * @var string
     */
    public $srcDsName;

    /**
     * @var string
     */
    public $srcDsType;

    /**
     * @var string
     */
    public $srcEngineId;

    /**
     * @var string
     */
    public $srcEngineName;

    /**
     * @var string
     */
    public $srcEngineType;

    /**
     * @var int
     */
    public $startImmediately;

    /**
     * @var string
     */
    public $targetGlobalParams;

    /**
     * @var string
     */
    public $taskConfigInfo;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskMode;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var float
     */
    public $totalCountThreshold;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'batchId' => 'batchId',
        'checkGlobalParams' => 'checkGlobalParams',
        'checkTemplateId' => 'checkTemplateId',
        'checkType' => 'checkType',
        'concurrency' => 'concurrency',
        'cronExp' => 'cronExp',
        'dataCheckConfig' => 'dataCheckConfig',
        'dstDsId' => 'dstDsId',
        'dstDsName' => 'dstDsName',
        'dstDsType' => 'dstDsType',
        'dstEngineId' => 'dstEngineId',
        'dstEngineName' => 'dstEngineName',
        'dstEngineType' => 'dstEngineType',
        'executeType' => 'executeType',
        'fullTableCount' => 'fullTableCount',
        'groupCountThreshold' => 'groupCountThreshold',
        'isBuiltin' => 'isBuiltin',
        'isScheduled' => 'isScheduled',
        'isWhiteList' => 'isWhiteList',
        'requestId' => 'requestId',
        'scheduleId' => 'scheduleId',
        'scopeFilter' => 'scopeFilter',
        'sourceGlobalParams' => 'sourceGlobalParams',
        'srcDsId' => 'srcDsId',
        'srcDsName' => 'srcDsName',
        'srcDsType' => 'srcDsType',
        'srcEngineId' => 'srcEngineId',
        'srcEngineName' => 'srcEngineName',
        'srcEngineType' => 'srcEngineType',
        'startImmediately' => 'startImmediately',
        'targetGlobalParams' => 'targetGlobalParams',
        'taskConfigInfo' => 'taskConfigInfo',
        'taskDescription' => 'taskDescription',
        'taskId' => 'taskId',
        'taskMode' => 'taskMode',
        'taskName' => 'taskName',
        'templateName' => 'templateName',
        'tenantId' => 'tenantId',
        'totalCountThreshold' => 'totalCountThreshold',
        'uid' => 'uid',
    ];

    public function validate()
    {
        if (\is_array($this->dataCheckConfig)) {
            Model::validateArray($this->dataCheckConfig);
        }
        if (null !== $this->scopeFilter) {
            $this->scopeFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->checkGlobalParams) {
            $res['checkGlobalParams'] = $this->checkGlobalParams;
        }

        if (null !== $this->checkTemplateId) {
            $res['checkTemplateId'] = $this->checkTemplateId;
        }

        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->concurrency) {
            $res['concurrency'] = $this->concurrency;
        }

        if (null !== $this->cronExp) {
            $res['cronExp'] = $this->cronExp;
        }

        if (null !== $this->dataCheckConfig) {
            if (\is_array($this->dataCheckConfig)) {
                $res['dataCheckConfig'] = [];
                $n1 = 0;
                foreach ($this->dataCheckConfig as $item1) {
                    $res['dataCheckConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dstDsId) {
            $res['dstDsId'] = $this->dstDsId;
        }

        if (null !== $this->dstDsName) {
            $res['dstDsName'] = $this->dstDsName;
        }

        if (null !== $this->dstDsType) {
            $res['dstDsType'] = $this->dstDsType;
        }

        if (null !== $this->dstEngineId) {
            $res['dstEngineId'] = $this->dstEngineId;
        }

        if (null !== $this->dstEngineName) {
            $res['dstEngineName'] = $this->dstEngineName;
        }

        if (null !== $this->dstEngineType) {
            $res['dstEngineType'] = $this->dstEngineType;
        }

        if (null !== $this->executeType) {
            $res['executeType'] = $this->executeType;
        }

        if (null !== $this->fullTableCount) {
            $res['fullTableCount'] = $this->fullTableCount;
        }

        if (null !== $this->groupCountThreshold) {
            $res['groupCountThreshold'] = $this->groupCountThreshold;
        }

        if (null !== $this->isBuiltin) {
            $res['isBuiltin'] = $this->isBuiltin;
        }

        if (null !== $this->isScheduled) {
            $res['isScheduled'] = $this->isScheduled;
        }

        if (null !== $this->isWhiteList) {
            $res['isWhiteList'] = $this->isWhiteList;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scheduleId) {
            $res['scheduleId'] = $this->scheduleId;
        }

        if (null !== $this->scopeFilter) {
            $res['scopeFilter'] = null !== $this->scopeFilter ? $this->scopeFilter->toArray($noStream) : $this->scopeFilter;
        }

        if (null !== $this->sourceGlobalParams) {
            $res['sourceGlobalParams'] = $this->sourceGlobalParams;
        }

        if (null !== $this->srcDsId) {
            $res['srcDsId'] = $this->srcDsId;
        }

        if (null !== $this->srcDsName) {
            $res['srcDsName'] = $this->srcDsName;
        }

        if (null !== $this->srcDsType) {
            $res['srcDsType'] = $this->srcDsType;
        }

        if (null !== $this->srcEngineId) {
            $res['srcEngineId'] = $this->srcEngineId;
        }

        if (null !== $this->srcEngineName) {
            $res['srcEngineName'] = $this->srcEngineName;
        }

        if (null !== $this->srcEngineType) {
            $res['srcEngineType'] = $this->srcEngineType;
        }

        if (null !== $this->startImmediately) {
            $res['startImmediately'] = $this->startImmediately;
        }

        if (null !== $this->targetGlobalParams) {
            $res['targetGlobalParams'] = $this->targetGlobalParams;
        }

        if (null !== $this->taskConfigInfo) {
            $res['taskConfigInfo'] = $this->taskConfigInfo;
        }

        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskMode) {
            $res['taskMode'] = $this->taskMode;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->totalCountThreshold) {
            $res['totalCountThreshold'] = $this->totalCountThreshold;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['checkGlobalParams'])) {
            $model->checkGlobalParams = $map['checkGlobalParams'];
        }

        if (isset($map['checkTemplateId'])) {
            $model->checkTemplateId = $map['checkTemplateId'];
        }

        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['concurrency'])) {
            $model->concurrency = $map['concurrency'];
        }

        if (isset($map['cronExp'])) {
            $model->cronExp = $map['cronExp'];
        }

        if (isset($map['dataCheckConfig'])) {
            if (!empty($map['dataCheckConfig'])) {
                $model->dataCheckConfig = [];
                $n1 = 0;
                foreach ($map['dataCheckConfig'] as $item1) {
                    $model->dataCheckConfig[$n1] = dataCheckConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dstDsId'])) {
            $model->dstDsId = $map['dstDsId'];
        }

        if (isset($map['dstDsName'])) {
            $model->dstDsName = $map['dstDsName'];
        }

        if (isset($map['dstDsType'])) {
            $model->dstDsType = $map['dstDsType'];
        }

        if (isset($map['dstEngineId'])) {
            $model->dstEngineId = $map['dstEngineId'];
        }

        if (isset($map['dstEngineName'])) {
            $model->dstEngineName = $map['dstEngineName'];
        }

        if (isset($map['dstEngineType'])) {
            $model->dstEngineType = $map['dstEngineType'];
        }

        if (isset($map['executeType'])) {
            $model->executeType = $map['executeType'];
        }

        if (isset($map['fullTableCount'])) {
            $model->fullTableCount = $map['fullTableCount'];
        }

        if (isset($map['groupCountThreshold'])) {
            $model->groupCountThreshold = $map['groupCountThreshold'];
        }

        if (isset($map['isBuiltin'])) {
            $model->isBuiltin = $map['isBuiltin'];
        }

        if (isset($map['isScheduled'])) {
            $model->isScheduled = $map['isScheduled'];
        }

        if (isset($map['isWhiteList'])) {
            $model->isWhiteList = $map['isWhiteList'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scheduleId'])) {
            $model->scheduleId = $map['scheduleId'];
        }

        if (isset($map['scopeFilter'])) {
            $model->scopeFilter = scopeFilter::fromMap($map['scopeFilter']);
        }

        if (isset($map['sourceGlobalParams'])) {
            $model->sourceGlobalParams = $map['sourceGlobalParams'];
        }

        if (isset($map['srcDsId'])) {
            $model->srcDsId = $map['srcDsId'];
        }

        if (isset($map['srcDsName'])) {
            $model->srcDsName = $map['srcDsName'];
        }

        if (isset($map['srcDsType'])) {
            $model->srcDsType = $map['srcDsType'];
        }

        if (isset($map['srcEngineId'])) {
            $model->srcEngineId = $map['srcEngineId'];
        }

        if (isset($map['srcEngineName'])) {
            $model->srcEngineName = $map['srcEngineName'];
        }

        if (isset($map['srcEngineType'])) {
            $model->srcEngineType = $map['srcEngineType'];
        }

        if (isset($map['startImmediately'])) {
            $model->startImmediately = $map['startImmediately'];
        }

        if (isset($map['targetGlobalParams'])) {
            $model->targetGlobalParams = $map['targetGlobalParams'];
        }

        if (isset($map['taskConfigInfo'])) {
            $model->taskConfigInfo = $map['taskConfigInfo'];
        }

        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskMode'])) {
            $model->taskMode = $map['taskMode'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['totalCountThreshold'])) {
            $model->totalCountThreshold = $map['totalCountThreshold'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
