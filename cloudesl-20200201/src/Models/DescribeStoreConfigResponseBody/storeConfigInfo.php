<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoreConfigResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoreConfigResponseBody\storeConfigInfo\subscribeContents;
use AlibabaCloud\Tea\Model;

class storeConfigInfo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableNotification;

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
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @var subscribeContents[]
     */
    public $subscribeContents;
    protected $_name = [
        'enableNotification'      => 'EnableNotification',
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
            $res['SubscribeContents'] = [];
            if (null !== $this->subscribeContents && \is_array($this->subscribeContents)) {
                $n = 0;
                foreach ($this->subscribeContents as $item) {
                    $res['SubscribeContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storeConfigInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableNotification'])) {
            $model->enableNotification = $map['EnableNotification'];
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
            if (!empty($map['SubscribeContents'])) {
                $model->subscribeContents = [];
                $n                        = 0;
                foreach ($map['SubscribeContents'] as $item) {
                    $model->subscribeContents[$n++] = null !== $item ? subscribeContents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
