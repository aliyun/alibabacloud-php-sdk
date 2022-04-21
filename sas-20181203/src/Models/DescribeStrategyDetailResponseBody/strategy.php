<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @var int
     */
    public $cycleDays;

    /**
     * @var int
     */
    public $cycleStartTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var riskTypeWhiteListQueryResultList[]
     */
    public $riskTypeWhiteListQueryResultList;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'cycleDays'                        => 'CycleDays',
        'cycleStartTime'                   => 'CycleStartTime',
        'id'                               => 'Id',
        'name'                             => 'Name',
        'riskTypeWhiteListQueryResultList' => 'RiskTypeWhiteListQueryResultList',
        'type'                             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskTypeWhiteListQueryResultList) {
            $res['RiskTypeWhiteListQueryResultList'] = [];
            if (null !== $this->riskTypeWhiteListQueryResultList && \is_array($this->riskTypeWhiteListQueryResultList)) {
                $n = 0;
                foreach ($this->riskTypeWhiteListQueryResultList as $item) {
                    $res['RiskTypeWhiteListQueryResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleDays'])) {
            $model->cycleDays = $map['CycleDays'];
        }
        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskTypeWhiteListQueryResultList'])) {
            if (!empty($map['RiskTypeWhiteListQueryResultList'])) {
                $model->riskTypeWhiteListQueryResultList = [];
                $n                                       = 0;
                foreach ($map['RiskTypeWhiteListQueryResultList'] as $item) {
                    $model->riskTypeWhiteListQueryResultList[$n++] = null !== $item ? riskTypeWhiteListQueryResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
