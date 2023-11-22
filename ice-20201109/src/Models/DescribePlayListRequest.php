<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribePlayListRequest extends Model
{
    /**
     * @example 1676170500011
     *
     * @var string
     */
    public $beginTs;

    /**
     * @example 1682474405173
     *
     * @var string
     */
    public $endTs;

    /**
     * @example FirstFrameDuration
     *
     * @var string
     */
    public $orderName;

    /**
     * @example DESC
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example vod
     *
     * @var string
     */
    public $playType;

    /**
     * @example complete
     *
     * @var string
     */
    public $status;

    /**
     * @example 0bc5e70516766285805381012d271e
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'beginTs'   => 'BeginTs',
        'endTs'     => 'EndTs',
        'orderName' => 'OrderName',
        'orderType' => 'OrderType',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'playType'  => 'PlayType',
        'status'    => 'Status',
        'traceId'   => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTs) {
            $res['BeginTs'] = $this->beginTs;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->playType) {
            $res['PlayType'] = $this->playType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTs'])) {
            $model->beginTs = $map['BeginTs'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlayType'])) {
            $model->playType = $map['PlayType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
