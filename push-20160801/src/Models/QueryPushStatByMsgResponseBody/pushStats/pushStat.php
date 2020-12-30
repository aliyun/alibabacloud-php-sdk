<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody\pushStats;

use AlibabaCloud\Tea\Model;

class pushStat extends Model
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var int
     */
    public $deletedCount;

    /**
     * @var int
     */
    public $openedCount;

    /**
     * @var int
     */
    public $smsReceiveSuccessCount;

    /**
     * @var int
     */
    public $smsSkipCount;

    /**
     * @var int
     */
    public $smsReceiveFailedCount;

    /**
     * @var int
     */
    public $smsFailedCount;

    /**
     * @var int
     */
    public $receivedCount;

    /**
     * @var int
     */
    public $sentCount;

    /**
     * @var int
     */
    public $smsSentCount;

    /**
     * @var int
     */
    public $acceptCount;
    protected $_name = [
        'messageId'              => 'MessageId',
        'deletedCount'           => 'DeletedCount',
        'openedCount'            => 'OpenedCount',
        'smsReceiveSuccessCount' => 'SmsReceiveSuccessCount',
        'smsSkipCount'           => 'SmsSkipCount',
        'smsReceiveFailedCount'  => 'SmsReceiveFailedCount',
        'smsFailedCount'         => 'SmsFailedCount',
        'receivedCount'          => 'ReceivedCount',
        'sentCount'              => 'SentCount',
        'smsSentCount'           => 'SmsSentCount',
        'acceptCount'            => 'AcceptCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->deletedCount) {
            $res['DeletedCount'] = $this->deletedCount;
        }
        if (null !== $this->openedCount) {
            $res['OpenedCount'] = $this->openedCount;
        }
        if (null !== $this->smsReceiveSuccessCount) {
            $res['SmsReceiveSuccessCount'] = $this->smsReceiveSuccessCount;
        }
        if (null !== $this->smsSkipCount) {
            $res['SmsSkipCount'] = $this->smsSkipCount;
        }
        if (null !== $this->smsReceiveFailedCount) {
            $res['SmsReceiveFailedCount'] = $this->smsReceiveFailedCount;
        }
        if (null !== $this->smsFailedCount) {
            $res['SmsFailedCount'] = $this->smsFailedCount;
        }
        if (null !== $this->receivedCount) {
            $res['ReceivedCount'] = $this->receivedCount;
        }
        if (null !== $this->sentCount) {
            $res['SentCount'] = $this->sentCount;
        }
        if (null !== $this->smsSentCount) {
            $res['SmsSentCount'] = $this->smsSentCount;
        }
        if (null !== $this->acceptCount) {
            $res['AcceptCount'] = $this->acceptCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushStat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['DeletedCount'])) {
            $model->deletedCount = $map['DeletedCount'];
        }
        if (isset($map['OpenedCount'])) {
            $model->openedCount = $map['OpenedCount'];
        }
        if (isset($map['SmsReceiveSuccessCount'])) {
            $model->smsReceiveSuccessCount = $map['SmsReceiveSuccessCount'];
        }
        if (isset($map['SmsSkipCount'])) {
            $model->smsSkipCount = $map['SmsSkipCount'];
        }
        if (isset($map['SmsReceiveFailedCount'])) {
            $model->smsReceiveFailedCount = $map['SmsReceiveFailedCount'];
        }
        if (isset($map['SmsFailedCount'])) {
            $model->smsFailedCount = $map['SmsFailedCount'];
        }
        if (isset($map['ReceivedCount'])) {
            $model->receivedCount = $map['ReceivedCount'];
        }
        if (isset($map['SentCount'])) {
            $model->sentCount = $map['SentCount'];
        }
        if (isset($map['SmsSentCount'])) {
            $model->smsSentCount = $map['SmsSentCount'];
        }
        if (isset($map['AcceptCount'])) {
            $model->acceptCount = $map['AcceptCount'];
        }

        return $model;
    }
}
