<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskOperationLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskOperationLogsResponseBody\pagingInfo\operationLogs;

class pagingInfo extends Model
{
    /**
     * @var operationLogs[]
     */
    public $operationLogs;
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
        'operationLogs' => 'OperationLogs',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->operationLogs)) {
            Model::validateArray($this->operationLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationLogs) {
            if (\is_array($this->operationLogs)) {
                $res['OperationLogs'] = [];
                $n1                   = 0;
                foreach ($this->operationLogs as $item1) {
                    $res['OperationLogs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperationLogs'])) {
            if (!empty($map['OperationLogs'])) {
                $model->operationLogs = [];
                $n1                   = 0;
                foreach ($map['OperationLogs'] as $item1) {
                    $model->operationLogs[$n1++] = operationLogs::fromMap($item1);
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
