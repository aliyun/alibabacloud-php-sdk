<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMediaSettleInfoResponseBody\model;

use AlibabaCloud\Tea\Model;

class mediaSettleInfoList extends Model
{
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
    public $mediaSettleAmount;

    /**
     * @var string
     */
    public $settleNo;

    /**
     * @var string
     */
    public $settleStatus;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var string
     */
    public $mediaSettleDetailId;

    /**
     * @var string
     */
    public $modifiedDate;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $extInfo;
    protected $_name = [
        'endTime'             => 'EndTime',
        'startTime'           => 'StartTime',
        'mediaSettleAmount'   => 'MediaSettleAmount',
        'settleNo'            => 'SettleNo',
        'settleStatus'        => 'SettleStatus',
        'channelId'           => 'ChannelId',
        'mediaName'           => 'MediaName',
        'mediaSettleDetailId' => 'MediaSettleDetailId',
        'modifiedDate'        => 'ModifiedDate',
        'createDate'          => 'CreateDate',
        'extInfo'             => 'ExtInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->mediaSettleAmount) {
            $res['MediaSettleAmount'] = $this->mediaSettleAmount;
        }
        if (null !== $this->settleNo) {
            $res['SettleNo'] = $this->settleNo;
        }
        if (null !== $this->settleStatus) {
            $res['SettleStatus'] = $this->settleStatus;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }
        if (null !== $this->mediaSettleDetailId) {
            $res['MediaSettleDetailId'] = $this->mediaSettleDetailId;
        }
        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['MediaSettleAmount'])) {
            $model->mediaSettleAmount = $map['MediaSettleAmount'];
        }
        if (isset($map['SettleNo'])) {
            $model->settleNo = $map['SettleNo'];
        }
        if (isset($map['SettleStatus'])) {
            $model->settleStatus = $map['SettleStatus'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }
        if (isset($map['MediaSettleDetailId'])) {
            $model->mediaSettleDetailId = $map['MediaSettleDetailId'];
        }
        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
