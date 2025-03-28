<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponseBody\pagingInfo\taskInstances;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponseBody\pagingInfo\upstreamTaskInstances;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
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
     * @description The instances. This parameter is deprecated and replaced by the UpstreamTaskInstances parameter.
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

    /**
     * @description The ancestor instances.
     *
     * @var upstreamTaskInstances[]
     */
    public $upstreamTaskInstances;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'taskInstances' => 'TaskInstances',
        'totalCount' => 'TotalCount',
        'upstreamTaskInstances' => 'UpstreamTaskInstances',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->upstreamTaskInstances) {
            $res['UpstreamTaskInstances'] = [];
            if (null !== $this->upstreamTaskInstances && \is_array($this->upstreamTaskInstances)) {
                $n = 0;
                foreach ($this->upstreamTaskInstances as $item) {
                    $res['UpstreamTaskInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['UpstreamTaskInstances'])) {
            if (!empty($map['UpstreamTaskInstances'])) {
                $model->upstreamTaskInstances = [];
                $n = 0;
                foreach ($map['UpstreamTaskInstances'] as $item) {
                    $model->upstreamTaskInstances[$n++] = null !== $item ? upstreamTaskInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
