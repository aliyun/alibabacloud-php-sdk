<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\notificationUnicastRequest\sendTarget;
use AlibabaCloud\Tea\Model;

class notificationUnicastRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $isDebug;

    /**
     * @example 2iU81*****G9elJ
     *
     * @var string
     */
    public $messageTemplateId;

    /**
     * @example {"nick":"张三"}
     *
     * @var string[]
     */
    public $placeHolder;

    /**
     * @var sendTarget
     */
    public $sendTarget;
    protected $_name = [
        'isDebug'           => 'IsDebug',
        'messageTemplateId' => 'MessageTemplateId',
        'placeHolder'       => 'PlaceHolder',
        'sendTarget'        => 'SendTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }
        if (null !== $this->messageTemplateId) {
            $res['MessageTemplateId'] = $this->messageTemplateId;
        }
        if (null !== $this->placeHolder) {
            $res['PlaceHolder'] = $this->placeHolder;
        }
        if (null !== $this->sendTarget) {
            $res['SendTarget'] = null !== $this->sendTarget ? $this->sendTarget->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationUnicastRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }
        if (isset($map['MessageTemplateId'])) {
            $model->messageTemplateId = $map['MessageTemplateId'];
        }
        if (isset($map['PlaceHolder'])) {
            $model->placeHolder = $map['PlaceHolder'];
        }
        if (isset($map['SendTarget'])) {
            $model->sendTarget = sendTarget::fromMap($map['SendTarget']);
        }

        return $model;
    }
}
