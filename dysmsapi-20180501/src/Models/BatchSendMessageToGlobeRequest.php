<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Dara\Model;

class BatchSendMessageToGlobeRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $validityPeriod;
    protected $_name = [
        'channelId' => 'ChannelId',
        'from' => 'From',
        'message' => 'Message',
        'taskId' => 'TaskId',
        'to' => 'To',
        'type' => 'Type',
        'validityPeriod' => 'ValidityPeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->validityPeriod) {
            $res['ValidityPeriod'] = $this->validityPeriod;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ValidityPeriod'])) {
            $model->validityPeriod = $map['ValidityPeriod'];
        }

        return $model;
    }
}
