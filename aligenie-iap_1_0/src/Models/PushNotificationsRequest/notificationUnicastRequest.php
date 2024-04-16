<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest\notificationUnicastRequest\sendTarget;
use AlibabaCloud\Tea\Model;

class notificationUnicastRequest extends Model
{
    /**
     * @example apk包名
     *
     * @var string
     */
    public $encodeKey;

    /**
     * @example PACKAGE_NAME
     *
     * @var string
     */
    public $encodeType;

    /**
     * @example true
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
     * @example 2
     *
     * @var string
     */
    public $organizationId;

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
        'encodeKey'         => 'EncodeKey',
        'encodeType'        => 'EncodeType',
        'isDebug'           => 'IsDebug',
        'messageTemplateId' => 'MessageTemplateId',
        'organizationId'    => 'OrganizationId',
        'placeHolder'       => 'PlaceHolder',
        'sendTarget'        => 'SendTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }
        if (null !== $this->messageTemplateId) {
            $res['MessageTemplateId'] = $this->messageTemplateId;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
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
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }
        if (isset($map['MessageTemplateId'])) {
            $model->messageTemplateId = $map['MessageTemplateId'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
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
