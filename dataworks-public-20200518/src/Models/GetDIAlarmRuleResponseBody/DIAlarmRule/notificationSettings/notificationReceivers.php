<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody\DIAlarmRule\notificationSettings;

use AlibabaCloud\Tea\Model;

class notificationReceivers extends Model
{
    /**
     * @description The recipient type.
     *
     *   If the alert notification method is Mail, Phone, or Sms, the recipient type is Alibaba Cloud account ID.
     *   If the alert notification method is Ding, the recipient type is DingTalk chatbot token.
     *
     * @example DingToken
     *
     * @var string
     */
    public $receiverType;

    /**
     * @description The recipients.
     *
     * @var string[]
     */
    public $receiverValues;
    protected $_name = [
        'receiverType'   => 'ReceiverType',
        'receiverValues' => 'ReceiverValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }
        if (null !== $this->receiverValues) {
            $res['ReceiverValues'] = $this->receiverValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationReceivers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }
        if (isset($map['ReceiverValues'])) {
            if (!empty($map['ReceiverValues'])) {
                $model->receiverValues = $map['ReceiverValues'];
            }
        }

        return $model;
    }
}
