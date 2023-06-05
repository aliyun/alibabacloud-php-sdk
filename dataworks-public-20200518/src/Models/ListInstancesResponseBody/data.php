<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponseBody\data\instances;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the node. You can call the [ListNodes](~~173979~~) operation to query the name of the node.
     *
     * @var instances[]
     */
    public $instances;

    /**
     * @description The time when the node was scheduled to run.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The priority of the instance. Valid values: 1, 3, 5, 7, and 8.
     *
     * A greater value indicates a higher priority. Default value: 1.
     * @example 66
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instances'  => 'Instances',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
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
