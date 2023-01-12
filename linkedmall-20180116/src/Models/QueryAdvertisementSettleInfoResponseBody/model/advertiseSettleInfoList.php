<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAdvertisementSettleInfoResponseBody\model;

use AlibabaCloud\Tea\Model;

class advertiseSettleInfoList extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $advertiseName;

    /**
     * @example 1000
     *
     * @var string
     */
    public $advertiseSettleAmount;

    /**
     * @example ""
     *
     * @var string
     */
    public $advertiseSettleDetailId;

    /**
     * @example 5781******561
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 2021-09-11 10:00:00
     *
     * @var string
     */
    public $createDate;

    /**
     * @example 2021-09-11 10:01:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example {}
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
     * @example 2021-09-11 10:01:00
     *
     * @var string
     */
    public $modifiedDate;

    /**
     * @example TEST000000
     *
     * @var string
     */
    public $settleNo;

    /**
     * @example ""
     *
     * @var string
     */
    public $settleStatus;

    /**
     * @example 2021-09-11 10:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'advertiseName'           => 'AdvertiseName',
        'advertiseSettleAmount'   => 'AdvertiseSettleAmount',
        'advertiseSettleDetailId' => 'AdvertiseSettleDetailId',
        'channelId'               => 'ChannelId',
        'createDate'              => 'CreateDate',
        'endTime'                 => 'EndTime',
        'extInfo'                 => 'ExtInfo',
        'mediaSettleDetailId'     => 'MediaSettleDetailId',
        'modifiedDate'            => 'ModifiedDate',
        'settleNo'                => 'SettleNo',
        'settleStatus'            => 'SettleStatus',
        'startTime'               => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advertiseName) {
            $res['AdvertiseName'] = $this->advertiseName;
        }
        if (null !== $this->advertiseSettleAmount) {
            $res['AdvertiseSettleAmount'] = $this->advertiseSettleAmount;
        }
        if (null !== $this->advertiseSettleDetailId) {
            $res['AdvertiseSettleDetailId'] = $this->advertiseSettleDetailId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
        }
        if (null !== $this->settleNo) {
            $res['SettleNo'] = $this->settleNo;
        }
        if (null !== $this->settleStatus) {
            $res['SettleStatus'] = $this->settleStatus;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advertiseSettleInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvertiseName'])) {
            $model->advertiseName = $map['AdvertiseName'];
        }
        if (isset($map['AdvertiseSettleAmount'])) {
            $model->advertiseSettleAmount = $map['AdvertiseSettleAmount'];
        }
        if (isset($map['AdvertiseSettleDetailId'])) {
            $model->advertiseSettleDetailId = $map['AdvertiseSettleDetailId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
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
        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }
        if (isset($map['SettleNo'])) {
            $model->settleNo = $map['SettleNo'];
        }
        if (isset($map['SettleStatus'])) {
            $model->settleStatus = $map['SettleStatus'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
