<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList\dependencyPeriod;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList\outputContextParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList\ownerList;

class devObjectDependencyList extends Model
{
    /**
     * @var bool
     */
    public $autoParse;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var string
     */
    public $cronExpression;

    /**
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
     * @var string
     */
    public $dependencyStrategy;

    /**
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
     * @var bool
     */
    public $manuallyAdd;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeOutputName;

    /**
     * @var string
     */
    public $nodeOutputTableName;

    /**
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
     * @var int
     */
    public $periodDiff;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var bool
     */
    public $selfDepend;

    /**
     * @var string
     */
    public $subBizType;

    /**
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

    public function validate()
    {
        if (\is_array($this->dependFieldList)) {
            Model::validateArray($this->dependFieldList);
        }
        if (null !== $this->dependencyPeriod) {
            $this->dependencyPeriod->validate();
        }
        if (\is_array($this->effectFieldList)) {
            Model::validateArray($this->effectFieldList);
        }
        if (\is_array($this->outputContextParamList)) {
            Model::validateArray($this->outputContextParamList);
        }
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dependFieldList)) {
                $res['DependFieldList'] = [];
                $n1 = 0;
                foreach ($this->dependFieldList as $item1) {
                    $res['DependFieldList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dependencyPeriod) {
            $res['DependencyPeriod'] = null !== $this->dependencyPeriod ? $this->dependencyPeriod->toArray($noStream) : $this->dependencyPeriod;
        }

        if (null !== $this->dependencyStrategy) {
            $res['DependencyStrategy'] = $this->dependencyStrategy;
        }

        if (null !== $this->dimMidNode) {
            $res['DimMidNode'] = $this->dimMidNode;
        }

        if (null !== $this->effectFieldList) {
            if (\is_array($this->effectFieldList)) {
                $res['EffectFieldList'] = [];
                $n1 = 0;
                foreach ($this->effectFieldList as $item1) {
                    $res['EffectFieldList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->outputContextParamList)) {
                $res['OutputContextParamList'] = [];
                $n1 = 0;
                foreach ($this->outputContextParamList as $item1) {
                    $res['OutputContextParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->dependFieldList = [];
                $n1 = 0;
                foreach ($map['DependFieldList'] as $item1) {
                    $model->dependFieldList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->effectFieldList = [];
                $n1 = 0;
                foreach ($map['EffectFieldList'] as $item1) {
                    $model->effectFieldList[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['OutputContextParamList'] as $item1) {
                    $model->outputContextParamList[$n1] = outputContextParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1] = ownerList::fromMap($item1);
                    ++$n1;
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
