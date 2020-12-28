<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponseBody\snapshotPackages;
use AlibabaCloud\Tea\Model;

class DescribeSnapshotPackageResponseBody extends Model
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
     * @var snapshotPackages[]
     */
    public $snapshotPackages;
    protected $_name = [
        'totalCount'       => 'TotalCount',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'pageNumber'       => 'PageNumber',
        'snapshotPackages' => 'SnapshotPackages',
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
        if (null !== $this->snapshotPackages) {
            $res['SnapshotPackages'] = [];
            if (null !== $this->snapshotPackages && \is_array($this->snapshotPackages)) {
                $n = 0;
                foreach ($this->snapshotPackages as $item) {
                    $res['SnapshotPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotPackageResponseBody
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
        if (isset($map['SnapshotPackages'])) {
            if (!empty($map['SnapshotPackages'])) {
                $model->snapshotPackages = [];
                $n                       = 0;
                foreach ($map['SnapshotPackages'] as $item) {
                    $model->snapshotPackages[$n++] = null !== $item ? snapshotPackages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
