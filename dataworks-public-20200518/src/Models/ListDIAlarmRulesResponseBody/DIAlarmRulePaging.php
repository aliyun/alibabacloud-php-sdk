<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIAlarmRulesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIAlarmRulesResponseBody\DIAlarmRulePaging\DIJobAlarmRules;
use AlibabaCloud\Tea\Model;

class DIAlarmRulePaging extends Model
{
    /**
     * @var DIJobAlarmRules[]
     */
    public $DIJobAlarmRules;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DIJobAlarmRules' => 'DIJobAlarmRules',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobAlarmRules) {
            $res['DIJobAlarmRules'] = [];
            if (null !== $this->DIJobAlarmRules && \is_array($this->DIJobAlarmRules)) {
                $n = 0;
                foreach ($this->DIJobAlarmRules as $item) {
                    $res['DIJobAlarmRules'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DIAlarmRulePaging
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobAlarmRules'])) {
            if (!empty($map['DIJobAlarmRules'])) {
                $model->DIJobAlarmRules = [];
                $n                      = 0;
                foreach ($map['DIJobAlarmRules'] as $item) {
                    $model->DIJobAlarmRules[$n++] = null !== $item ? DIJobAlarmRules::fromMap($item) : $item;
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
