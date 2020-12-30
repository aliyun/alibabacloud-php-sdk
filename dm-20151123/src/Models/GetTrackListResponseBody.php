<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetTrackListResponseBody extends Model
{
    /**
     * @var string
     */
    public $offsetCreateTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var data
     */
    public $data;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var string
     */
    public $offsetCreateTimeDesc;
    protected $_name = [
        'offsetCreateTime'     => 'OffsetCreateTime',
        'requestId'            => 'RequestId',
        'pageSize'             => 'PageSize',
        'data'                 => 'data',
        'total'                => 'Total',
        'pageNo'               => 'PageNo',
        'offsetCreateTimeDesc' => 'OffsetCreateTimeDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offsetCreateTime) {
            $res['OffsetCreateTime'] = $this->offsetCreateTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->offsetCreateTimeDesc) {
            $res['OffsetCreateTimeDesc'] = $this->offsetCreateTimeDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrackListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OffsetCreateTime'])) {
            $model->offsetCreateTime = $map['OffsetCreateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['OffsetCreateTimeDesc'])) {
            $model->offsetCreateTimeDesc = $map['OffsetCreateTimeDesc'];
        }

        return $model;
    }
}
