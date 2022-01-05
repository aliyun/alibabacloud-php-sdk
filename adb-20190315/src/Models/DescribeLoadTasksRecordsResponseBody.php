<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsResponseBody\loadTasksRecords;
use AlibabaCloud\Tea\Model;

class DescribeLoadTasksRecordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var loadTasksRecords[]
     */
    public $loadTasksRecords;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'loadTasksRecords' => 'LoadTasksRecords',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->loadTasksRecords) {
            $res['LoadTasksRecords'] = [];
            if (null !== $this->loadTasksRecords && \is_array($this->loadTasksRecords)) {
                $n = 0;
                foreach ($this->loadTasksRecords as $item) {
                    $res['LoadTasksRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadTasksRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['LoadTasksRecords'])) {
            if (!empty($map['LoadTasksRecords'])) {
                $model->loadTasksRecords = [];
                $n                       = 0;
                foreach ($map['LoadTasksRecords'] as $item) {
                    $model->loadTasksRecords[$n++] = null !== $item ? loadTasksRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
