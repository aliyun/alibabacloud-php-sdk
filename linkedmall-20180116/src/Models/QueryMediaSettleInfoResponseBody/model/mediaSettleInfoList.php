<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMediaSettleInfoResponseBody\model;

use AlibabaCloud\Tea\Model;

class mediaSettleInfoList extends Model
{
    /**
     * @example 63839******79044
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $createDate;

    /**
     * @example 2021-08-01 01:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var string
     */
    public $mediaSettleAmount;

    /**
     * @var string
     */
    public $mediaSettleDetailId;

    /**
     * @example 2021-08-01 01:00:00
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
     * @example waitPayerConfirm
     *
     * @var string
     */
    public $settleStatus;

    /**
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'channelId'           => 'ChannelId',
        'createDate'          => 'CreateDate',
        'endTime'             => 'EndTime',
        'extInfo'             => 'ExtInfo',
        'mediaName'           => 'MediaName',
        'mediaSettleAmount'   => 'MediaSettleAmount',
        'mediaSettleDetailId' => 'MediaSettleDetailId',
        'modifiedDate'        => 'ModifiedDate',
        'settleNo'            => 'SettleNo',
        'settleStatus'        => 'SettleStatus',
        'startTime'           => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }
        if (null !== $this->mediaSettleAmount) {
            $res['MediaSettleAmount'] = $this->mediaSettleAmount;
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
     * @return mediaSettleInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }
        if (isset($map['MediaSettleAmount'])) {
            $model->mediaSettleAmount = $map['MediaSettleAmount'];
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
