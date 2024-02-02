<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryDedicatedBlockStorageClusterInventoryDataResponseBody extends Model
{
    /**
     * @description The returned data.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The ID of the dedicated block storage cluster.
     *
     * @example dbsc-xxx
     *
     * @var string
     */
    public $dbscId;

    /**
     * @description The name of the dedicated block storage cluster.
     *
     * @example myDBSCCluster
     *
     * @var string
     */
    public $dbscName;

    /**
     * @description The type of the disk. Valid values:
     *
     *   cloud_essd: enhanced SSD (ESSD).
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The ID of the request.
     *
     * @example F1A4258A-0C8C-5329-B495-BC5AD7AD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 60
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'data'         => 'Data',
        'dbscId'       => 'DbscId',
        'dbscName'     => 'DbscName',
        'diskCategory' => 'DiskCategory',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dbscId) {
            $res['DbscId'] = $this->dbscId;
        }
        if (null !== $this->dbscName) {
            $res['DbscName'] = $this->dbscName;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
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
     * @return QueryDedicatedBlockStorageClusterInventoryDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DbscId'])) {
            $model->dbscId = $map['DbscId'];
        }
        if (isset($map['DbscName'])) {
            $model->dbscName = $map['DbscName'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
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
