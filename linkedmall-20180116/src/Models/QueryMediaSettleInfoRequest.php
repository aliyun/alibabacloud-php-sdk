<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryMediaSettleInfoRequest extends Model
{
    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $settleNo;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $extInfo;
    protected $_name = [
        'mediaName'  => 'MediaName',
        'channelId'  => 'ChannelId',
        'settleNo'   => 'SettleNo',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
        'extInfo'    => 'ExtInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->settleNo) {
            $res['SettleNo'] = $this->settleNo;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaSettleInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['SettleNo'])) {
            $model->settleNo = $map['SettleNo'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
