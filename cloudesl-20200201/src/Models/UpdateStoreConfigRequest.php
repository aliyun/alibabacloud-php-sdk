<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class UpdateStoreConfigRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableNotification;

    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example [{"from":960,"to":1320},{"from":1170,"to":1230}]
     *
     * @var string
     */
    public $notificationSilentTimes;

    /**
     * @example https://oapi.dingtalk.com/robot/send?.
     *
     * @var string
     */
    public $notificationWebHook;

    /**
     * @example s-sds1233****
     *
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $subscribeContents;
    protected $_name = [
        'enableNotification'      => 'EnableNotification',
        'extraParams'             => 'ExtraParams',
        'notificationSilentTimes' => 'NotificationSilentTimes',
        'notificationWebHook'     => 'NotificationWebHook',
        'storeId'                 => 'StoreId',
        'subscribeContents'       => 'SubscribeContents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableNotification) {
            $res['EnableNotification'] = $this->enableNotification;
        }
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->notificationSilentTimes) {
            $res['NotificationSilentTimes'] = $this->notificationSilentTimes;
        }
        if (null !== $this->notificationWebHook) {
            $res['NotificationWebHook'] = $this->notificationWebHook;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->subscribeContents) {
            $res['SubscribeContents'] = $this->subscribeContents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStoreConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableNotification'])) {
            $model->enableNotification = $map['EnableNotification'];
        }
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['NotificationSilentTimes'])) {
            $model->notificationSilentTimes = $map['NotificationSilentTimes'];
        }
        if (isset($map['NotificationWebHook'])) {
            $model->notificationWebHook = $map['NotificationWebHook'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['SubscribeContents'])) {
            $model->subscribeContents = $map['SubscribeContents'];
        }

        return $model;
    }
}
