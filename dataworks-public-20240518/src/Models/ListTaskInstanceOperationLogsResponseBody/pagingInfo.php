<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstanceOperationLogsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstanceOperationLogsResponseBody\pagingInfo\operationLogs;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The operation logs.
     *
     * @var operationLogs[]
     */
    public $operationLogs;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'operationLogs' => 'OperationLogs',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationLogs) {
            $res['OperationLogs'] = [];
            if (null !== $this->operationLogs && \is_array($this->operationLogs)) {
                $n = 0;
                foreach ($this->operationLogs as $item) {
                    $res['OperationLogs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationLogs'])) {
            if (!empty($map['OperationLogs'])) {
                $model->operationLogs = [];
                $n = 0;
                foreach ($map['OperationLogs'] as $item) {
                    $model->operationLogs[$n++] = null !== $item ? operationLogs::fromMap($item) : $item;
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
