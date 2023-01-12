<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryAdvertisementSettleInfoRequest extends Model
{
    /**
     * @example LMALL20******006
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 5781******561
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 2021-08-01 01:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example ""
     *
     * @var string
     */
    public $mediaSettleDetailId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example TEST000000
     *
     * @var string
     */
    public $settleNo;

    /**
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bizId'               => 'BizId',
        'channelId'           => 'ChannelId',
        'endTime'             => 'EndTime',
        'extInfo'             => 'ExtInfo',
        'mediaSettleDetailId' => 'MediaSettleDetailId',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'settleNo'            => 'SettleNo',
        'startTime'           => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->mediaSettleDetailId) {
            $res['MediaSettleDetailId'] = $this->mediaSettleDetailId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->settleNo) {
            $res['SettleNo'] = $this->settleNo;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAdvertisementSettleInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['MediaSettleDetailId'])) {
            $model->mediaSettleDetailId = $map['MediaSettleDetailId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SettleNo'])) {
            $model->settleNo = $map['SettleNo'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
