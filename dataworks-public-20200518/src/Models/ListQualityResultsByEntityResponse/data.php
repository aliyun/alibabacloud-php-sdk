<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse\data\ruleChecks;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var ruleChecks[]
     */
    public $ruleChecks;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'ruleChecks' => 'RuleChecks',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('ruleChecks', $this->ruleChecks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
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

        return $model;
    }
}
