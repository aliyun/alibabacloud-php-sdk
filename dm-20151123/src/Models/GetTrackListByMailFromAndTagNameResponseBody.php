<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListByMailFromAndTagNameResponseBody\trackList;
use AlibabaCloud\Tea\Model;

class GetTrackListByMailFromAndTagNameResponseBody extends Model
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
     * @var int
     */
    public $total;

    /**
     * @var trackList
     */
    public $trackList;

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
        'total'                => 'Total',
        'trackList'            => 'TrackList',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->trackList) {
            $res['TrackList'] = null !== $this->trackList ? $this->trackList->toMap() : null;
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
     * @return GetTrackListByMailFromAndTagNameResponseBody
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TrackList'])) {
            $model->trackList = trackList::fromMap($map['TrackList']);
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
