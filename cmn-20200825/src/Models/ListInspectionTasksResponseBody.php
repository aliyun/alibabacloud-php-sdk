<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTasksResponseBody\inspectionTasks;
use AlibabaCloud\Tea\Model;

class ListInspectionTasksResponseBody extends Model
{
    /**
     * @var inspectionTasks[]
     */
    public $inspectionTasks;

    /**
     * @example ""或"1"
     *
     * @var int
     */
    public $nextToken;

    /**
     * @example AC8F05E6-AFBB-4ABE-B75E-A6539A9BAAA8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'inspectionTasks' => 'InspectionTasks',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionTasks) {
            $res['InspectionTasks'] = [];
            if (null !== $this->inspectionTasks && \is_array($this->inspectionTasks)) {
                $n = 0;
                foreach ($this->inspectionTasks as $item) {
                    $res['InspectionTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListInspectionTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionTasks'])) {
            if (!empty($map['InspectionTasks'])) {
                $model->inspectionTasks = [];
                $n                      = 0;
                foreach ($map['InspectionTasks'] as $item) {
                    $model->inspectionTasks[$n++] = null !== $item ? inspectionTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
