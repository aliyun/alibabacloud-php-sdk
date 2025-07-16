<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class CatalogSummaryTrend extends Model
{
    /**
     * @description API visit count trends
     *
     * @var DateSummary[]
     */
    public $apiVisitCount;

    /**
     * @description file access count trends
     *
     * @var DateSummary[]
     */
    public $fileAccessCount;

    /**
     * @description Table count trends
     *
     * @var DateSummary[]
     */
    public $throughput;

    /**
     * @description Historical total file count
     *
     * @var DateSummary[]
     */
    public $totalFileCount;

    /**
     * @description Database count trends
     *
     * @var DateSummary[]
     */
    public $totalFileSizeInBytes;

    /**
     * @description Latest snapshot file count
     *
     * @var DateSummary[]
     */
    public $totalMetaCount;
    protected $_name = [
        'apiVisitCount' => 'apiVisitCount',
        'fileAccessCount' => 'fileAccessCount',
        'throughput' => 'throughput',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
        'totalMetaCount' => 'totalMetaCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVisitCount) {
            $res['apiVisitCount'] = [];
            if (null !== $this->apiVisitCount && \is_array($this->apiVisitCount)) {
                $n = 0;
                foreach ($this->apiVisitCount as $item) {
                    $res['apiVisitCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileAccessCount) {
            $res['fileAccessCount'] = [];
            if (null !== $this->fileAccessCount && \is_array($this->fileAccessCount)) {
                $n = 0;
                foreach ($this->fileAccessCount as $item) {
                    $res['fileAccessCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->throughput) {
            $res['throughput'] = [];
            if (null !== $this->throughput && \is_array($this->throughput)) {
                $n = 0;
                foreach ($this->throughput as $item) {
                    $res['throughput'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalFileCount) {
            $res['totalFileCount'] = [];
            if (null !== $this->totalFileCount && \is_array($this->totalFileCount)) {
                $n = 0;
                foreach ($this->totalFileCount as $item) {
                    $res['totalFileCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalFileSizeInBytes) {
            $res['totalFileSizeInBytes'] = [];
            if (null !== $this->totalFileSizeInBytes && \is_array($this->totalFileSizeInBytes)) {
                $n = 0;
                foreach ($this->totalFileSizeInBytes as $item) {
                    $res['totalFileSizeInBytes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalMetaCount) {
            $res['totalMetaCount'] = [];
            if (null !== $this->totalMetaCount && \is_array($this->totalMetaCount)) {
                $n = 0;
                foreach ($this->totalMetaCount as $item) {
                    $res['totalMetaCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CatalogSummaryTrend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiVisitCount'])) {
            if (!empty($map['apiVisitCount'])) {
                $model->apiVisitCount = [];
                $n = 0;
                foreach ($map['apiVisitCount'] as $item) {
                    $model->apiVisitCount[$n++] = null !== $item ? DateSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['fileAccessCount'])) {
            if (!empty($map['fileAccessCount'])) {
                $model->fileAccessCount = [];
                $n = 0;
                foreach ($map['fileAccessCount'] as $item) {
                    $model->fileAccessCount[$n++] = null !== $item ? DateSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['throughput'])) {
            if (!empty($map['throughput'])) {
                $model->throughput = [];
                $n = 0;
                foreach ($map['throughput'] as $item) {
                    $model->throughput[$n++] = null !== $item ? DateSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalFileCount'])) {
            if (!empty($map['totalFileCount'])) {
                $model->totalFileCount = [];
                $n = 0;
                foreach ($map['totalFileCount'] as $item) {
                    $model->totalFileCount[$n++] = null !== $item ? DateSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalFileSizeInBytes'])) {
            if (!empty($map['totalFileSizeInBytes'])) {
                $model->totalFileSizeInBytes = [];
                $n = 0;
                foreach ($map['totalFileSizeInBytes'] as $item) {
                    $model->totalFileSizeInBytes[$n++] = null !== $item ? DateSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalMetaCount'])) {
            if (!empty($map['totalMetaCount'])) {
                $model->totalMetaCount = [];
                $n = 0;
                foreach ($map['totalMetaCount'] as $item) {
                    $model->totalMetaCount[$n++] = null !== $item ? DateSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
