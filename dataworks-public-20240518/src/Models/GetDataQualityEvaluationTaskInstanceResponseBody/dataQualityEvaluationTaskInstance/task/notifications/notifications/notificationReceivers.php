<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task\notifications\notifications;

use AlibabaCloud\Tea\Model;

class notificationReceivers extends Model
{
    /**
     * @description Additional parameter settings for sending alerts in json format. The supported keys are as follows:
     *
     * - atAll: when sending DingTalk alerts, do you need to @ everyone in the group. It takes effect when ReceiverType is DingdingUrl.
     *
     * @example { "atAll": true }
     *
     * @var string
     */
    public $extension;

    /**
     * @description The type of alert recipient.
     *
     * @example DingdingUrl
     *
     * @var string
     */
    public $receiverType;

    /**
     * @description The recipient of the alert.
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
