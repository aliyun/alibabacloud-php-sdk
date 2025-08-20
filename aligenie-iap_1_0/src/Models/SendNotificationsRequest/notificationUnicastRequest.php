<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest\notificationUnicastRequest\sendTarget;

class notificationUnicastRequest extends Model
{
    /**
     * @var bool
     */
    public $isDebug;

    /**
     * @var string
     */
    public $messageTemplateId;

    /**
     * @var string[]
     */
    public $placeHolder;

    /**
     * @var sendTarget
     */
    public $sendTarget;
    protected $_name = [
        'isDebug' => 'IsDebug',
        'messageTemplateId' => 'MessageTemplateId',
        'placeHolder' => 'PlaceHolder',
        'sendTarget' => 'SendTarget',
    ];

    public function validate()
    {
        if (\is_array($this->placeHolder)) {
            Model::validateArray($this->placeHolder);
        }
        if (null !== $this->sendTarget) {
            $this->sendTarget->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }

        if (null !== $this->messageTemplateId) {
            $res['MessageTemplateId'] = $this->messageTemplateId;
        }

        if (null !== $this->placeHolder) {
            if (\is_array($this->placeHolder)) {
                $res['PlaceHolder'] = [];
                foreach ($this->placeHolder as $key1 => $value1) {
                    $res['PlaceHolder'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sendTarget) {
            $res['SendTarget'] = null !== $this->sendTarget ? $this->sendTarget->toArray($noStream) : $this->sendTarget;
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
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }

        if (isset($map['MessageTemplateId'])) {
            $model->messageTemplateId = $map['MessageTemplateId'];
        }

        if (isset($map['PlaceHolder'])) {
            if (!empty($map['PlaceHolder'])) {
                $model->placeHolder = [];
                foreach ($map['PlaceHolder'] as $key1 => $value1) {
                    $model->placeHolder[$key1] = $value1;
                }
            }
        }

        if (isset($map['SendTarget'])) {
            $model->sendTarget = sendTarget::fromMap($map['SendTarget']);
        }

        return $model;
    }
}
