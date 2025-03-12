<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarStrategyTaskResultRequest extends Model
{
    /**
     * @description Condition parameters for task scheduling.
     *
     * @example {"status":1}
     *
     * @var string
     */
    public $condition;

    /**
     * @description The current page number during paginated queries.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The maximum number of entries to display per page during paginated queries.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Strategy task ID.
     * > You can obtain this parameter by calling the [DescribeSoarStrategyTasks](~~DescribeSoarStrategyTasks~~) interface.
     * @example 100
     *
     * @var int
     */
    public $strategyTaskId;
    protected $_name = [
        'condition'      => 'Condition',
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'strategyTaskId' => 'StrategyTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->strategyTaskId) {
            $res['StrategyTaskId'] = $this->strategyTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarStrategyTaskResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StrategyTaskId'])) {
            $model->strategyTaskId = $map['StrategyTaskId'];
        }

        return $model;
    }
}
