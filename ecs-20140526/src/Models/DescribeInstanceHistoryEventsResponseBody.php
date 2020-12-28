<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet;
use AlibabaCloud\Tea\Model;

class DescribeInstanceHistoryEventsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;

    /**
     * @var instanceSystemEventSet[]
     */
    public $instanceSystemEventSet;
    protected $_name = [
        'totalCount'             => 'TotalCount',
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'pageNumber'             => 'PageNumber',
        'instanceSystemEventSet' => 'InstanceSystemEventSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->instanceSystemEventSet) {
            $res['InstanceSystemEventSet'] = [];
            if (null !== $this->instanceSystemEventSet && \is_array($this->instanceSystemEventSet)) {
                $n = 0;
                foreach ($this->instanceSystemEventSet as $item) {
                    $res['InstanceSystemEventSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceHistoryEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['InstanceSystemEventSet'])) {
            if (!empty($map['InstanceSystemEventSet'])) {
                $model->instanceSystemEventSet = [];
                $n                             = 0;
                foreach ($map['InstanceSystemEventSet'] as $item) {
                    $model->instanceSystemEventSet[$n++] = null !== $item ? instanceSystemEventSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
