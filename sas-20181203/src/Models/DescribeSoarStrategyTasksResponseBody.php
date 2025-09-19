<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategyTasksResponseBody\soarStrategyTasks;

class DescribeSoarStrategyTasksResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var soarStrategyTasks[]
     */
    public $soarStrategyTasks;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'soarStrategyTasks' => 'SoarStrategyTasks',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->soarStrategyTasks)) {
            Model::validateArray($this->soarStrategyTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->soarStrategyTasks) {
            if (\is_array($this->soarStrategyTasks)) {
                $res['SoarStrategyTasks'] = [];
                $n1 = 0;
                foreach ($this->soarStrategyTasks as $item1) {
                    $res['SoarStrategyTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SoarStrategyTasks'])) {
            if (!empty($map['SoarStrategyTasks'])) {
                $model->soarStrategyTasks = [];
                $n1 = 0;
                foreach ($map['SoarStrategyTasks'] as $item1) {
                    $model->soarStrategyTasks[$n1] = soarStrategyTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
