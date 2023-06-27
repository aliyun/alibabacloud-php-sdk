<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SendMessageToGlobeRequest extends Model
{
    /**
     * @description The mobile phone number of the sender. You can also specify a sender ID. The sender ID can contain both letters and digits. If it does, the ID must be between 1 to 11 characters in length. If the sender ID contains only digits, it must be 1 to 15 characters in length.
     *
     * @example Alicloud321
     *
     * @var string
     */
    public $from;

    /**
     * @description The content of the message.
     *
     * @example Hello
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the messaging campaign. It must be 1 to 255 characters in length. The ID is the value of the TaskId field in the delivery receipt of the message.
     *
     * @example 123****789
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The mobile phone number to which the message is sent. You must add the dialing code to the beginning of the mobile phone number. Example: 8521245567\*\*\*\*.
     *
     * For more information, see [Dialing codes](https://www.alibabacloud.com/help/zh/short-message-service/latest/dialing-codes).
     * @example 8521245567****
     *
     * @var string
     */
    public $to;

    /**
     * @var int
     */
    public $validityPeriod;
    protected $_name = [
        'from'           => 'From',
        'message'        => 'Message',
        'taskId'         => 'TaskId',
        'to'             => 'To',
        'validityPeriod' => 'ValidityPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->validityPeriod) {
            $res['ValidityPeriod'] = $this->validityPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageToGlobeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ValidityPeriod'])) {
            $model->validityPeriod = $map['ValidityPeriod'];
        }

        return $model;
    }
}
