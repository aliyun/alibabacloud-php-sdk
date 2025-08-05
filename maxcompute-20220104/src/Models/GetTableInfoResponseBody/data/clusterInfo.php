<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data\clusterInfo\sortCols;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @description Optional. The number of buckets in the clustered table. The value 0 indicates that the number of buckets dynamically changes when a job is running.
     *
     * @example 1024
     *
     * @var int
     */
    public $bucketNum;

    /**
     * @description The cluster keys.
     *
     * @var string[]
     */
    public $clusterCols;

    /**
     * @description The clustering type of the table. MaxCompute supports [hash clustering](https://www.alibabacloud.com/help/maxcompute/use-cases/hash-clustering) and
     *
     * [range clustering](https://www.alibabacloud.com/help/maxcompute/use-cases/range-clustering).
     *
     * @example Hash
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The condition by which the results are sorted.
     *
     * @var sortCols[]
     */
    public $sortCols;
    protected $_name = [
        'bucketNum' => 'bucketNum',
        'clusterCols' => 'clusterCols',
        'clusterType' => 'clusterType',
        'sortCols' => 'sortCols',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketNum) {
            $res['bucketNum'] = $this->bucketNum;
        }
        if (null !== $this->clusterCols) {
            $res['clusterCols'] = $this->clusterCols;
        }
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }
        if (null !== $this->sortCols) {
            $res['sortCols'] = [];
            if (null !== $this->sortCols && \is_array($this->sortCols)) {
                $n = 0;
                foreach ($this->sortCols as $item) {
                    $res['sortCols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucketNum'])) {
            $model->bucketNum = $map['bucketNum'];
        }
        if (isset($map['clusterCols'])) {
            if (!empty($map['clusterCols'])) {
                $model->clusterCols = $map['clusterCols'];
            }
        }
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }
        if (isset($map['sortCols'])) {
            if (!empty($map['sortCols'])) {
                $model->sortCols = [];
                $n = 0;
                foreach ($map['sortCols'] as $item) {
                    $model->sortCols[$n++] = null !== $item ? sortCols::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
