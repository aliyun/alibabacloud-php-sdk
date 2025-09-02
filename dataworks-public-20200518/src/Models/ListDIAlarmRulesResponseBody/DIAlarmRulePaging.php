<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIAlarmRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIAlarmRulesResponseBody\DIAlarmRulePaging\DIJobAlarmRules;

class DIAlarmRulePaging extends Model
{
    /**
     * @var DIJobAlarmRules[]
     */
    public $DIJobAlarmRules;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DIJobAlarmRules' => 'DIJobAlarmRules',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->DIJobAlarmRules)) {
            Model::validateArray($this->DIJobAlarmRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobAlarmRules) {
            if (\is_array($this->DIJobAlarmRules)) {
                $res['DIJobAlarmRules'] = [];
                $n1 = 0;
                foreach ($this->DIJobAlarmRules as $item1) {
                    $res['DIJobAlarmRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DIJobAlarmRules'])) {
            if (!empty($map['DIJobAlarmRules'])) {
                $model->DIJobAlarmRules = [];
                $n1 = 0;
                foreach ($map['DIJobAlarmRules'] as $item1) {
                    $model->DIJobAlarmRules[$n1] = DIJobAlarmRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
