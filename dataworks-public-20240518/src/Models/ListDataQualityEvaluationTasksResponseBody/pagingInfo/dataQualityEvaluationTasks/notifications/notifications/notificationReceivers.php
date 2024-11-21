<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks\notifications\notifications;

use AlibabaCloud\Tea\Model;

class notificationReceivers extends Model
{
    /**
     * @description The extended information in the JSON format. For example, the DingTalk chatbot can remind all members in a DingTalk group by using the at sign (@).
     *
     * @example {"atAll":"true"}
     *
     * @var string
     */
    public $extension;

    /**
     * @description The type of the alert recipient. Valid values:
     *
     *   AliUid: Alibaba Cloud account ID
     *   WebhookUrl: URL of a custom webhook
     *   DingdingUrl: DingTalk chatbot URL
     *   FeishuUrl: Lark chatbot URL
     *   WeixinUrl: WeCom chatbot URL
     *
     * @example AliUid
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
        'extension'      => 'Extension',
        'receiverType'   => 'ReceiverType',
        'receiverValues' => 'ReceiverValues',
    ];

    public function validate()
    {
    }

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
     * @return notificationReceivers
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
