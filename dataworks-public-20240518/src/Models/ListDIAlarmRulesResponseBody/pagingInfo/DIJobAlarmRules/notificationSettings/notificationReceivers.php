<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIAlarmRulesResponseBody\pagingInfo\DIJobAlarmRules\notificationSettings;

use AlibabaCloud\Tea\Model;

class notificationReceivers extends Model
{
    /**
     * @description The recipient type. Valid values: AliyunUid, DingToken, FeishuToken, and WebHookUrl.
     *
     * @example DingToken
     *
     * @var string
     */
    public $receiverType;

    /**
     * @description The recipient.
     *
     *   If the value of the ReceiverType parameter is AliyunUid, the value of this parameter is the Alibaba Cloud account ID of a user.
     *   If the value of the ReceiverType parameter is DingToken, the value of this parameter is the token of a DingTalk chatbot.
     *
     * @var string[]
     */
    public $receiverValues;
    protected $_name = [
        'receiverType' => 'ReceiverType',
        'receiverValues' => 'ReceiverValues',
    ];

    public function validate() {}

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
