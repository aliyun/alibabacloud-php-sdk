<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleObjectScanEventRequest\ruleConditionList;

class HandleObjectScanEventRequest extends Model
{
    /**
     * @var string
     */
    public $batchType;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var int[]
     */
    public $eventIdList;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var ruleConditionList[]
     */
    public $ruleConditionList;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'batchType' => 'BatchType',
        'eventId' => 'EventId',
        'eventIdList' => 'EventIdList',
        'lang' => 'Lang',
        'remark' => 'Remark',
        'ruleConditionList' => 'RuleConditionList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->eventIdList)) {
            Model::validateArray($this->eventIdList);
        }
        if (\is_array($this->ruleConditionList)) {
            Model::validateArray($this->ruleConditionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventIdList) {
            if (\is_array($this->eventIdList)) {
                $res['EventIdList'] = [];
                $n1 = 0;
                foreach ($this->eventIdList as $item1) {
                    $res['EventIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->ruleConditionList) {
            if (\is_array($this->ruleConditionList)) {
                $res['RuleConditionList'] = [];
                $n1 = 0;
                foreach ($this->ruleConditionList as $item1) {
                    $res['RuleConditionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventIdList'])) {
            if (!empty($map['EventIdList'])) {
                $model->eventIdList = [];
                $n1 = 0;
                foreach ($map['EventIdList'] as $item1) {
                    $model->eventIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RuleConditionList'])) {
            if (!empty($map['RuleConditionList'])) {
                $model->ruleConditionList = [];
                $n1 = 0;
                foreach ($map['RuleConditionList'] as $item1) {
                    $model->ruleConditionList[$n1] = ruleConditionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
