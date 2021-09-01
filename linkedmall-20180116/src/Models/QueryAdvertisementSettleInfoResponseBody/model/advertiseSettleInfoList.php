<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAdvertisementSettleInfoResponseBody\model;

use AlibabaCloud\Tea\Model;

class advertiseSettleInfoList extends Model
{
    /**
     * @var string
     */
    public $advertiseSettleDetailId;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $mediaSettleDetailId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $settleNo;

    /**
     * @var string
     */
    public $advertiseSettleAmount;

    /**
     * @var string
     */
    public $settleStatus;

    /**
     * @var string
     */
    public $advertiseName;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $modifiedDate;
    protected $_name = [
        'advertiseSettleDetailId' => 'AdvertiseSettleDetailId',
        'createDate'              => 'CreateDate',
        'mediaSettleDetailId'     => 'MediaSettleDetailId',
        'extInfo'                 => 'ExtInfo',
        'endTime'                 => 'EndTime',
        'startTime'               => 'StartTime',
        'settleNo'                => 'SettleNo',
        'advertiseSettleAmount'   => 'AdvertiseSettleAmount',
        'settleStatus'            => 'SettleStatus',
        'advertiseName'           => 'AdvertiseName',
        'channelId'               => 'ChannelId',
        'modifiedDate'            => 'ModifiedDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advertiseSettleDetailId) {
            $res['AdvertiseSettleDetailId'] = $this->advertiseSettleDetailId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->mediaSettleDetailId) {
            $res['MediaSettleDetailId'] = $this->mediaSettleDetailId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->settleNo) {
            $res['SettleNo'] = $this->settleNo;
        }
        if (null !== $this->advertiseSettleAmount) {
            $res['AdvertiseSettleAmount'] = $this->advertiseSettleAmount;
        }
        if (null !== $this->settleStatus) {
            $res['SettleStatus'] = $this->settleStatus;
        }
        if (null !== $this->advertiseName) {
            $res['AdvertiseName'] = $this->advertiseName;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
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
        if (isset($map['AdvertiseSettleDetailId'])) {
            $model->advertiseSettleDetailId = $map['AdvertiseSettleDetailId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['MediaSettleDetailId'])) {
            $model->mediaSettleDetailId = $map['MediaSettleDetailId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SettleNo'])) {
            $model->settleNo = $map['SettleNo'];
        }
        if (isset($map['AdvertiseSettleAmount'])) {
            $model->advertiseSettleAmount = $map['AdvertiseSettleAmount'];
        }
        if (isset($map['SettleStatus'])) {
            $model->settleStatus = $map['SettleStatus'];
        }
        if (isset($map['AdvertiseName'])) {
            $model->advertiseName = $map['AdvertiseName'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }

        return $model;
    }
}
