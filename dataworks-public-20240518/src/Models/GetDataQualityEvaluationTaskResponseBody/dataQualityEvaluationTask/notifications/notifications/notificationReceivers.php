<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask\notifications\notifications;

use AlibabaCloud\Tea\Model;

class notificationReceivers extends Model
{
    /**
     * @description 扩展信息，格式为 json，例如钉钉机器人支持 at 所有人
     *
     * @example {  "atAll": true }
     *
     * @var string
     */
    public $extension;

    /**
     * @description The additional parameters that are required when alerts are sent. The parameters are JSON-formatted strings. The following keys are supported:
     *
     *   atAll: specifies that all members in a group are mentioned when alerts are sent by using DingTalk. This parameter is valid only if you set ReceiverType to DingdingUrl.
     *
     * Valid values:
     *
     *   WebhookUrl
     *   FeishuUrl
     *   DingdingUrl
     *   WeixinUrl
     *   AliUid
     *
     * @example DingdingUrl
     *
     * @var string
     */
    public $receiverType;

    /**
     * @description 告警接收人
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
