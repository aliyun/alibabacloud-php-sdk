<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\options\sms;

class options extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $jobKey;

    /**
     * @var int
     */
    public $messageId;

    /**
     * @var string
     */
    public $pushTime;

    /**
     * @var sms
     */
    public $sms;

    /**
     * @var bool
     */
    public $trim;

    /**
     * @var string
     */
    public $useChannels;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'jobKey' => 'JobKey',
        'messageId' => 'MessageId',
        'pushTime' => 'PushTime',
        'sms' => 'Sms',
        'trim' => 'Trim',
        'useChannels' => 'UseChannels',
    ];

    public function validate()
    {
        if (null !== $this->sms) {
            $this->sms->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }

        if (null !== $this->sms) {
            $res['Sms'] = null !== $this->sms ? $this->sms->toArray($noStream) : $this->sms;
        }

        if (null !== $this->trim) {
            $res['Trim'] = $this->trim;
        }

        if (null !== $this->useChannels) {
            $res['UseChannels'] = $this->useChannels;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }

        if (isset($map['Sms'])) {
            $model->sms = sms::fromMap($map['Sms']);
        }

        if (isset($map['Trim'])) {
            $model->trim = $map['Trim'];
        }

        if (isset($map['UseChannels'])) {
            $model->useChannels = $map['UseChannels'];
        }

        return $model;
    }
}
