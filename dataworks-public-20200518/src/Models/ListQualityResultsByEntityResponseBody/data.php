<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody\data\ruleChecks;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The monitoring results returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The type of the monitoring rule. The type of a monitoring rule indicates the importance of the rule. Valid values:
     *
     *   1: indicates that the monitoring rule is a strong rule.
     *
     *   0: indicates that the monitoring rule is a weak rule.
     *
     * You can specify whether a monitoring rule is a strong rule based on your business requirements. If a strong rule is used and a critical alert is triggered, nodes are blocked.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The field of the rule attribute. This field is the column name of the data source table that is monitored.
     *
     * @var ruleChecks[]
     */
    public $ruleChecks;

    /**
     * @description The threshold for a warning alert. The threshold indicates the deviation of the monitoring result from the expected value. You can customize this threshold based on your business requirements.
     *
     * @example 50
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'ruleChecks' => 'RuleChecks',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleChecks) {
            $res['RuleChecks'] = [];
            if (null !== $this->ruleChecks && \is_array($this->ruleChecks)) {
                $n = 0;
                foreach ($this->ruleChecks as $item) {
                    $res['RuleChecks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleChecks'])) {
            if (!empty($map['RuleChecks'])) {
                $model->ruleChecks = [];
                $n                 = 0;
                foreach ($map['RuleChecks'] as $item) {
                    $model->ruleChecks[$n++] = null !== $item ? ruleChecks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
