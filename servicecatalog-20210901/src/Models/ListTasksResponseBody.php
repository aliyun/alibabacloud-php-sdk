<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTasksResponseBody\taskDetails;
use AlibabaCloud\Tea\Model;

class ListTasksResponseBody extends Model
{
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
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @var taskDetails[]
     */
    public $taskDetails;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'taskDetails' => 'TaskDetails',
        'totalCount'  => 'TotalCount',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskDetails) {
            $res['TaskDetails'] = [];
            if (null !== $this->taskDetails && \is_array($this->taskDetails)) {
                $n = 0;
                foreach ($this->taskDetails as $item) {
                    $res['TaskDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListTasksResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskDetails'])) {
            if (!empty($map['TaskDetails'])) {
                $model->taskDetails = [];
                $n                  = 0;
                foreach ($map['TaskDetails'] as $item) {
                    $model->taskDetails[$n++] = null !== $item ? taskDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
