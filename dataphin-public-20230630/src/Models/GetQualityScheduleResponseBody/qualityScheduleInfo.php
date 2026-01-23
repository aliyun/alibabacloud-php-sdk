<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityScheduleResponseBody;

use AlibabaCloud\Dara\Model;

class qualityScheduleInfo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isRefByRule;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $partitionExpression;

    /**
     * @var string
     */
    public $partitionType;

    /**
     * @var string
     */
    public $periodScheduleIntervalType;

    /**
     * @var string[]
     */
    public $periodScheduleParamList;

    /**
     * @var string
     */
    public $staticTaskTriggerType;

    /**
     * @var string[]
     */
    public $triggerNodeList;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $validatePartitionType;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'cronExpression' => 'CronExpression',
        'id' => 'Id',
        'isRefByRule' => 'IsRefByRule',
        'modifier' => 'Modifier',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'partitionExpression' => 'PartitionExpression',
        'partitionType' => 'PartitionType',
        'periodScheduleIntervalType' => 'PeriodScheduleIntervalType',
        'periodScheduleParamList' => 'PeriodScheduleParamList',
        'staticTaskTriggerType' => 'StaticTaskTriggerType',
        'triggerNodeList' => 'TriggerNodeList',
        'triggerType' => 'TriggerType',
        'type' => 'Type',
        'validatePartitionType' => 'ValidatePartitionType',
        'watchId' => 'WatchId',
    ];

    public function validate()
    {
        if (\is_array($this->periodScheduleParamList)) {
            Model::validateArray($this->periodScheduleParamList);
        }
        if (\is_array($this->triggerNodeList)) {
            Model::validateArray($this->triggerNodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isRefByRule) {
            $res['IsRefByRule'] = $this->isRefByRule;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->partitionExpression) {
            $res['PartitionExpression'] = $this->partitionExpression;
        }

        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }

        if (null !== $this->periodScheduleIntervalType) {
            $res['PeriodScheduleIntervalType'] = $this->periodScheduleIntervalType;
        }

        if (null !== $this->periodScheduleParamList) {
            if (\is_array($this->periodScheduleParamList)) {
                $res['PeriodScheduleParamList'] = [];
                $n1 = 0;
                foreach ($this->periodScheduleParamList as $item1) {
                    $res['PeriodScheduleParamList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->staticTaskTriggerType) {
            $res['StaticTaskTriggerType'] = $this->staticTaskTriggerType;
        }

        if (null !== $this->triggerNodeList) {
            if (\is_array($this->triggerNodeList)) {
                $res['TriggerNodeList'] = [];
                $n1 = 0;
                foreach ($this->triggerNodeList as $item1) {
                    $res['TriggerNodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->validatePartitionType) {
            $res['ValidatePartitionType'] = $this->validatePartitionType;
        }

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsRefByRule'])) {
            $model->isRefByRule = $map['IsRefByRule'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PartitionExpression'])) {
            $model->partitionExpression = $map['PartitionExpression'];
        }

        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }

        if (isset($map['PeriodScheduleIntervalType'])) {
            $model->periodScheduleIntervalType = $map['PeriodScheduleIntervalType'];
        }

        if (isset($map['PeriodScheduleParamList'])) {
            if (!empty($map['PeriodScheduleParamList'])) {
                $model->periodScheduleParamList = [];
                $n1 = 0;
                foreach ($map['PeriodScheduleParamList'] as $item1) {
                    $model->periodScheduleParamList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StaticTaskTriggerType'])) {
            $model->staticTaskTriggerType = $map['StaticTaskTriggerType'];
        }

        if (isset($map['TriggerNodeList'])) {
            if (!empty($map['TriggerNodeList'])) {
                $model->triggerNodeList = [];
                $n1 = 0;
                foreach ($map['TriggerNodeList'] as $item1) {
                    $model->triggerNodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ValidatePartitionType'])) {
            $model->validatePartitionType = $map['ValidatePartitionType'];
        }

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}
