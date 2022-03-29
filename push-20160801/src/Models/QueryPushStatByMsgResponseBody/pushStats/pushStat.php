<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody\pushStats;

use AlibabaCloud\Tea\Model;

class pushStat extends Model
{
    /**
     * @var int
     */
    public $acceptCount;

    /**
     * @var int
     */
    public $deletedCount;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var int
     */
    public $openedCount;

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
    public $smsFailedCount;

    /**
     * @var int
     */
    public $smsReceiveFailedCount;

    /**
     * @var int
     */
    public $smsReceiveSuccessCount;

    /**
     * @var int
     */
    public $smsSentCount;

    /**
     * @var int
     */
    public $smsSkipCount;
    protected $_name = [
        'acceptCount'            => 'AcceptCount',
        'deletedCount'           => 'DeletedCount',
        'messageId'              => 'MessageId',
        'openedCount'            => 'OpenedCount',
        'receivedCount'          => 'ReceivedCount',
        'sentCount'              => 'SentCount',
        'smsFailedCount'         => 'SmsFailedCount',
        'smsReceiveFailedCount'  => 'SmsReceiveFailedCount',
        'smsReceiveSuccessCount' => 'SmsReceiveSuccessCount',
        'smsSentCount'           => 'SmsSentCount',
        'smsSkipCount'           => 'SmsSkipCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptCount) {
            $res['AcceptCount'] = $this->acceptCount;
        }
        if (null !== $this->deletedCount) {
            $res['DeletedCount'] = $this->deletedCount;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->openedCount) {
            $res['OpenedCount'] = $this->openedCount;
        }
        if (null !== $this->receivedCount) {
            $res['ReceivedCount'] = $this->receivedCount;
        }
        if (null !== $this->sentCount) {
            $res['SentCount'] = $this->sentCount;
        }
        if (null !== $this->smsFailedCount) {
            $res['SmsFailedCount'] = $this->smsFailedCount;
        }
        if (null !== $this->smsReceiveFailedCount) {
            $res['SmsReceiveFailedCount'] = $this->smsReceiveFailedCount;
        }
        if (null !== $this->smsReceiveSuccessCount) {
            $res['SmsReceiveSuccessCount'] = $this->smsReceiveSuccessCount;
        }
        if (null !== $this->smsSentCount) {
            $res['SmsSentCount'] = $this->smsSentCount;
        }
        if (null !== $this->smsSkipCount) {
            $res['SmsSkipCount'] = $this->smsSkipCount;
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
        if (isset($map['AcceptCount'])) {
            $model->acceptCount = $map['AcceptCount'];
        }
        if (isset($map['DeletedCount'])) {
            $model->deletedCount = $map['DeletedCount'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['OpenedCount'])) {
            $model->openedCount = $map['OpenedCount'];
        }
        if (isset($map['ReceivedCount'])) {
            $model->receivedCount = $map['ReceivedCount'];
        }
        if (isset($map['SentCount'])) {
            $model->sentCount = $map['SentCount'];
        }
        if (isset($map['SmsFailedCount'])) {
            $model->smsFailedCount = $map['SmsFailedCount'];
        }
        if (isset($map['SmsReceiveFailedCount'])) {
            $model->smsReceiveFailedCount = $map['SmsReceiveFailedCount'];
        }
        if (isset($map['SmsReceiveSuccessCount'])) {
            $model->smsReceiveSuccessCount = $map['SmsReceiveSuccessCount'];
        }
        if (isset($map['SmsSentCount'])) {
            $model->smsSentCount = $map['SmsSentCount'];
        }
        if (isset($map['SmsSkipCount'])) {
            $model->smsSkipCount = $map['SmsSkipCount'];
        }

        return $model;
    }
}
