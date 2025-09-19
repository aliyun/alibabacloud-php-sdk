<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList;

class strategy extends Model
{
    /**
     * @var string
     */
    public $customType;

    /**
     * @var int
     */
    public $cycleDays;

    /**
     * @var int
     */
    public $cycleStartTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $riskSubTypeName;

    /**
     * @var riskTypeWhiteListQueryResultList[]
     */
    public $riskTypeWhiteListQueryResultList;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'customType' => 'CustomType',
        'cycleDays' => 'CycleDays',
        'cycleStartTime' => 'CycleStartTime',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'name' => 'Name',
        'riskSubTypeName' => 'RiskSubTypeName',
        'riskTypeWhiteListQueryResultList' => 'RiskTypeWhiteListQueryResultList',
        'startTime' => 'StartTime',
        'targetType' => 'TargetType',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->riskTypeWhiteListQueryResultList)) {
            Model::validateArray($this->riskTypeWhiteListQueryResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }

        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }

        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->riskSubTypeName) {
            $res['RiskSubTypeName'] = $this->riskSubTypeName;
        }

        if (null !== $this->riskTypeWhiteListQueryResultList) {
            if (\is_array($this->riskTypeWhiteListQueryResultList)) {
                $res['RiskTypeWhiteListQueryResultList'] = [];
                $n1 = 0;
                foreach ($this->riskTypeWhiteListQueryResultList as $item1) {
                    $res['RiskTypeWhiteListQueryResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }

        if (isset($map['CycleDays'])) {
            $model->cycleDays = $map['CycleDays'];
        }

        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RiskSubTypeName'])) {
            $model->riskSubTypeName = $map['RiskSubTypeName'];
        }

        if (isset($map['RiskTypeWhiteListQueryResultList'])) {
            if (!empty($map['RiskTypeWhiteListQueryResultList'])) {
                $model->riskTypeWhiteListQueryResultList = [];
                $n1 = 0;
                foreach ($map['RiskTypeWhiteListQueryResultList'] as $item1) {
                    $model->riskTypeWhiteListQueryResultList[$n1] = riskTypeWhiteListQueryResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
