<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody\shardingDbs;
use AlibabaCloud\Tea\Model;

class DescribeDrdsShardingDbsResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of database shards returned per page.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 509BDE17-505A-4B3B-854D-30D3F092502F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of returned database shards.
     *
     * @var shardingDbs
     */
    public $shardingDbs;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The number of returned database shards.
     *
     * @example 1
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'shardingDbs' => 'ShardingDbs',
        'success'     => 'Success',
        'total'       => 'Total',
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
        if (null !== $this->shardingDbs) {
            $res['ShardingDbs'] = null !== $this->shardingDbs ? $this->shardingDbs->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsShardingDbsResponseBody
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
        if (isset($map['ShardingDbs'])) {
            $model->shardingDbs = shardingDbs::fromMap($map['ShardingDbs']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
