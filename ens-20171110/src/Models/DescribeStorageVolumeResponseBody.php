<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageVolumeResponseBody\storageVolumes;
use AlibabaCloud\Tea\Model;

class DescribeStorageVolumeResponseBody extends Model
{
    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example AAE90880-4970-4D81-A534-A6C0F3631F74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of returned results.
     *
     * @var storageVolumes[]
     */
    public $storageVolumes;

    /**
     * @description The total number of entries returned.
     *
     * @example 15
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'storageVolumes' => 'StorageVolumes',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageVolumes) {
            $res['StorageVolumes'] = [];
            if (null !== $this->storageVolumes && \is_array($this->storageVolumes)) {
                $n = 0;
                foreach ($this->storageVolumes as $item) {
                    $res['StorageVolumes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeStorageVolumeResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageVolumes'])) {
            if (!empty($map['StorageVolumes'])) {
                $model->storageVolumes = [];
                $n                     = 0;
                foreach ($map['StorageVolumes'] as $item) {
                    $model->storageVolumes[$n++] = null !== $item ? storageVolumes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
