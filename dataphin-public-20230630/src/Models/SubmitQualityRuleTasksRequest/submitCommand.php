<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitQualityRuleTasksRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitQualityRuleTasksRequest\submitCommand\watchRuleIdList;

class submitCommand extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var bool
     */
    public $isTestRun;

    /**
     * @var string
     */
    public $partitionExpression;

    /**
     * @var string
     */
    public $partitionExpressionFrom;

    /**
     * @var int
     */
    public $scheduleId;

    /**
     * @var watchRuleIdList[]
     */
    public $watchRuleIdList;
    protected $_name = [
        'bizDate' => 'BizDate',
        'isTestRun' => 'IsTestRun',
        'partitionExpression' => 'PartitionExpression',
        'partitionExpressionFrom' => 'PartitionExpressionFrom',
        'scheduleId' => 'ScheduleId',
        'watchRuleIdList' => 'WatchRuleIdList',
    ];

    public function validate()
    {
        if (\is_array($this->watchRuleIdList)) {
            Model::validateArray($this->watchRuleIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->isTestRun) {
            $res['IsTestRun'] = $this->isTestRun;
        }

        if (null !== $this->partitionExpression) {
            $res['PartitionExpression'] = $this->partitionExpression;
        }

        if (null !== $this->partitionExpressionFrom) {
            $res['PartitionExpressionFrom'] = $this->partitionExpressionFrom;
        }

        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }

        if (null !== $this->watchRuleIdList) {
            if (\is_array($this->watchRuleIdList)) {
                $res['WatchRuleIdList'] = [];
                $n1 = 0;
                foreach ($this->watchRuleIdList as $item1) {
                    $res['WatchRuleIdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['IsTestRun'])) {
            $model->isTestRun = $map['IsTestRun'];
        }

        if (isset($map['PartitionExpression'])) {
            $model->partitionExpression = $map['PartitionExpression'];
        }

        if (isset($map['PartitionExpressionFrom'])) {
            $model->partitionExpressionFrom = $map['PartitionExpressionFrom'];
        }

        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }

        if (isset($map['WatchRuleIdList'])) {
            if (!empty($map['WatchRuleIdList'])) {
                $model->watchRuleIdList = [];
                $n1 = 0;
                foreach ($map['WatchRuleIdList'] as $item1) {
                    $model->watchRuleIdList[$n1] = watchRuleIdList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
