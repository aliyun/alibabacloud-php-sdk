<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponseBody\snapshotLinks;
use AlibabaCloud\Tea\Model;

class DescribeSnapshotLinksResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var snapshotLinks[]
     */
    public $snapshotLinks;

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
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'snapshotLinks' => 'SnapshotLinks',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'pageNumber'    => 'PageNumber',
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
        if (null !== $this->snapshotLinks) {
            $res['SnapshotLinks'] = [];
            if (null !== $this->snapshotLinks && \is_array($this->snapshotLinks)) {
                $n = 0;
                foreach ($this->snapshotLinks as $item) {
                    $res['SnapshotLinks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotLinksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SnapshotLinks'])) {
            if (!empty($map['SnapshotLinks'])) {
                $model->snapshotLinks = [];
                $n                    = 0;
                foreach ($map['SnapshotLinks'] as $item) {
                    $model->snapshotLinks[$n++] = null !== $item ? snapshotLinks::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
