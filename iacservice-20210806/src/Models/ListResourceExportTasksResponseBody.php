<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody\exportTasks;
use AlibabaCloud\Tea\Model;

class ListResourceExportTasksResponseBody extends Model
{
    /**
     * @var exportTasks[]
     */
    public $exportTasks;

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
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'exportTasks' => 'exportTasks',
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
        'requestId'   => 'requestId',
        'totalCount'  => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportTasks) {
            $res['exportTasks'] = [];
            if (null !== $this->exportTasks && \is_array($this->exportTasks)) {
                $n = 0;
                foreach ($this->exportTasks as $item) {
                    $res['exportTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceExportTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['exportTasks'])) {
            if (!empty($map['exportTasks'])) {
                $model->exportTasks = [];
                $n                  = 0;
                foreach ($map['exportTasks'] as $item) {
                    $model->exportTasks[$n++] = null !== $item ? exportTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
