<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponseBody\pagingInfo\downstreamTaskInstances;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponseBody\pagingInfo\taskInstances;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The descendant instances.
     *
     * @var downstreamTaskInstances[]
     */
    public $downstreamTaskInstances;

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
     * @description The instances. This parameter is deprecated and replaced by the DownstreamTaskInstances parameter.
     *
     * @var taskInstances[]
     */
    public $taskInstances;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'downstreamTaskInstances' => 'DownstreamTaskInstances',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'taskInstances' => 'TaskInstances',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->downstreamTaskInstances) {
            $res['DownstreamTaskInstances'] = [];
            if (null !== $this->downstreamTaskInstances && \is_array($this->downstreamTaskInstances)) {
                $n = 0;
                foreach ($this->downstreamTaskInstances as $item) {
                    $res['DownstreamTaskInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskInstances) {
            $res['TaskInstances'] = [];
            if (null !== $this->taskInstances && \is_array($this->taskInstances)) {
                $n = 0;
                foreach ($this->taskInstances as $item) {
                    $res['TaskInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownstreamTaskInstances'])) {
            if (!empty($map['DownstreamTaskInstances'])) {
                $model->downstreamTaskInstances = [];
                $n = 0;
                foreach ($map['DownstreamTaskInstances'] as $item) {
                    $model->downstreamTaskInstances[$n++] = null !== $item ? downstreamTaskInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskInstances'])) {
            if (!empty($map['TaskInstances'])) {
                $model->taskInstances = [];
                $n = 0;
                foreach ($map['TaskInstances'] as $item) {
                    $model->taskInstances[$n++] = null !== $item ? taskInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
