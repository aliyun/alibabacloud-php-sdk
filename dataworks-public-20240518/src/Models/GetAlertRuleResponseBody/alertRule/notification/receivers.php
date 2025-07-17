<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\notification;

use AlibabaCloud\Tea\Model;

class receivers extends Model
{
    /**
     * @description The additional configuration of the alert recipient. If the ReceiverType parameter is set to DingdingUrl, you can set this parameter to {"atAll":true} to remind all members in a DingTalk group.
     *
     * @example {"atAll":true}
     *
     * @var string
     */
    public $extension;

    /**
     * @description The type of the alert recipient. Valid valves:
     *
     *   AliUid: Alibaba Cloud account ID.
     *   Shift Schedules: the personnel in a shift schedule.
     *   TaskOwner: the task owner. The task owner can receive custom alerts and event alerts.
     *   Owner: the baseline owner. The baseline owner can receive baseline alerts.
     *   WebhookUrl: URL of a custom webhook.
     *   DingdingUrl: DingTalk webhook URL.
     *   FeishuUrl: Lark webhook URL.
     *   WeixinUrl: WeCom webhook URL.
     *
     * @example WebhookUrl
     *
     * @var string
     */
    public $receiverType;

    /**
     * @description The alert recipients.
     *
     * @var string[]
     */
    public $receiverValues;
    protected $_name = [
        'extension' => 'Extension',
        'receiverType' => 'ReceiverType',
        'receiverValues' => 'ReceiverValues',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
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
     * @return receivers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
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
