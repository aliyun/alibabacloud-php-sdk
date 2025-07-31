<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList\dependencyPeriod;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList\outputContextParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList\ownerList;
use AlibabaCloud\Tea\Model;

class devObjectDependencyList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoParse;

    /**
     * @example SCRIPT
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 13111
     *
     * @var string
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @example 0 0 0 * * ?
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @example true
     *
     * @var bool
     */
    public $customCronExpression;

    /**
     * @var string[]
     */
    public $dependFieldList;

    /**
     * @var dependencyPeriod
     */
    public $dependencyPeriod;

    /**
     * @example ALL
     *
     * @var string
     */
    public $dependencyStrategy;

    /**
     * @example true
     *
     * @var bool
     */
    public $dimMidNode;

    /**
     * @var string[]
     */
    public $effectFieldList;

    /**
     * @var string
     */
    public $externalBizInfo;

    /**
     * @example false
     *
     * @var bool
     */
    public $manuallyAdd;

    /**
     * @example n_13211
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example n_xx
     *
     * @var string
     */
    public $nodeOutputName;

    /**
     * @example t_xx
     *
     * @var string
     */
    public $nodeOutputTableName;

    /**
     * @example DATA_PROCESS
     *
     * @var string
     */
    public $nodeType;

    /**
     * @var outputContextParamList[]
     */
    public $outputContextParamList;

    /**
     * @var ownerList[]
     */
    public $ownerList;

    /**
     * @example 1
     *
     * @var int
     */
    public $periodDiff;

    /**
     * @example 123131
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example DAILY
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @example true
     *
     * @var bool
     */
    public $selfDepend;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $subBizType;

    /**
     * @example true
     *
     * @var bool
     */
    public $valid;
    protected $_name = [
        'autoParse' => 'AutoParse',
        'bizType' => 'BizType',
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'cronExpression' => 'CronExpression',
        'customCronExpression' => 'CustomCronExpression',
        'dependFieldList' => 'DependFieldList',
        'dependencyPeriod' => 'DependencyPeriod',
        'dependencyStrategy' => 'DependencyStrategy',
        'dimMidNode' => 'DimMidNode',
        'effectFieldList' => 'EffectFieldList',
        'externalBizInfo' => 'ExternalBizInfo',
        'manuallyAdd' => 'ManuallyAdd',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeOutputName' => 'NodeOutputName',
        'nodeOutputTableName' => 'NodeOutputTableName',
        'nodeType' => 'NodeType',
        'outputContextParamList' => 'OutputContextParamList',
        'ownerList' => 'OwnerList',
        'periodDiff' => 'PeriodDiff',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'scheduleType' => 'ScheduleType',
        'selfDepend' => 'SelfDepend',
        'subBizType' => 'SubBizType',
        'valid' => 'Valid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoParse) {
            $res['AutoParse'] = $this->autoParse;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->customCronExpression) {
            $res['CustomCronExpression'] = $this->customCronExpression;
        }
        if (null !== $this->dependFieldList) {
            $res['DependFieldList'] = $this->dependFieldList;
        }
        if (null !== $this->dependencyPeriod) {
            $res['DependencyPeriod'] = null !== $this->dependencyPeriod ? $this->dependencyPeriod->toMap() : null;
        }
        if (null !== $this->dependencyStrategy) {
            $res['DependencyStrategy'] = $this->dependencyStrategy;
        }
        if (null !== $this->dimMidNode) {
            $res['DimMidNode'] = $this->dimMidNode;
        }
        if (null !== $this->effectFieldList) {
            $res['EffectFieldList'] = $this->effectFieldList;
        }
        if (null !== $this->externalBizInfo) {
            $res['ExternalBizInfo'] = $this->externalBizInfo;
        }
        if (null !== $this->manuallyAdd) {
            $res['ManuallyAdd'] = $this->manuallyAdd;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeOutputName) {
            $res['NodeOutputName'] = $this->nodeOutputName;
        }
        if (null !== $this->nodeOutputTableName) {
            $res['NodeOutputTableName'] = $this->nodeOutputTableName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->outputContextParamList) {
            $res['OutputContextParamList'] = [];
            if (null !== $this->outputContextParamList && \is_array($this->outputContextParamList)) {
                $n = 0;
                foreach ($this->outputContextParamList as $item) {
                    $res['OutputContextParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerList) {
            $res['OwnerList'] = [];
            if (null !== $this->ownerList && \is_array($this->ownerList)) {
                $n = 0;
                foreach ($this->ownerList as $item) {
                    $res['OwnerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->periodDiff) {
            $res['PeriodDiff'] = $this->periodDiff;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }
        if (null !== $this->selfDepend) {
            $res['SelfDepend'] = $this->selfDepend;
        }
        if (null !== $this->subBizType) {
            $res['SubBizType'] = $this->subBizType;
        }
        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devObjectDependencyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoParse'])) {
            $model->autoParse = $map['AutoParse'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['CustomCronExpression'])) {
            $model->customCronExpression = $map['CustomCronExpression'];
        }
        if (isset($map['DependFieldList'])) {
            if (!empty($map['DependFieldList'])) {
                $model->dependFieldList = $map['DependFieldList'];
            }
        }
        if (isset($map['DependencyPeriod'])) {
            $model->dependencyPeriod = dependencyPeriod::fromMap($map['DependencyPeriod']);
        }
        if (isset($map['DependencyStrategy'])) {
            $model->dependencyStrategy = $map['DependencyStrategy'];
        }
        if (isset($map['DimMidNode'])) {
            $model->dimMidNode = $map['DimMidNode'];
        }
        if (isset($map['EffectFieldList'])) {
            if (!empty($map['EffectFieldList'])) {
                $model->effectFieldList = $map['EffectFieldList'];
            }
        }
        if (isset($map['ExternalBizInfo'])) {
            $model->externalBizInfo = $map['ExternalBizInfo'];
        }
        if (isset($map['ManuallyAdd'])) {
            $model->manuallyAdd = $map['ManuallyAdd'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeOutputName'])) {
            $model->nodeOutputName = $map['NodeOutputName'];
        }
        if (isset($map['NodeOutputTableName'])) {
            $model->nodeOutputTableName = $map['NodeOutputTableName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['OutputContextParamList'])) {
            if (!empty($map['OutputContextParamList'])) {
                $model->outputContextParamList = [];
                $n = 0;
                foreach ($map['OutputContextParamList'] as $item) {
                    $model->outputContextParamList[$n++] = null !== $item ? outputContextParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n = 0;
                foreach ($map['OwnerList'] as $item) {
                    $model->ownerList[$n++] = null !== $item ? ownerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PeriodDiff'])) {
            $model->periodDiff = $map['PeriodDiff'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }
        if (isset($map['SelfDepend'])) {
            $model->selfDepend = $map['SelfDepend'];
        }
        if (isset($map['SubBizType'])) {
            $model->subBizType = $map['SubBizType'];
        }
        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
