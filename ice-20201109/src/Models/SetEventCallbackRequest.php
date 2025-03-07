<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SetEventCallbackRequest extends Model
{
    /**
     * @description The authentication key. The key can be up to 32 characters in length and must contain uppercase letters, lowercase letters, and digits. This parameter takes effect only if you set CallbackType to **HTTP**.
     *
     * @example TestKey001
     *
     * @var string
     */
    public $authKey;

    /**
     * @description Specifies whether to enable callback authentication. This parameter takes effect only if you set CallbackType to **HTTP**. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $authSwitch;

    /**
     * @description The name of the Simple Message Queue (SMQ) queue in the region. The name must start with ice-callback-.
     *
     * @example ice-callback-queue
     *
     * @var string
     */
    public $callbackQueueName;

    /**
     * @description The callback method. Valid values:
     *
     *   **HTTP**
     *   **MNS**
     *
     * @example HTTP
     *
     * @var string
     */
    public $callbackType;

    /**
     * @description The callback URL. This parameter is required if you set CallbackType to **HTTP**. The callback URL cannot exceed 256 bytes in length. You can specify only one callback URL.
     *
     * @example http://xxx.yyy/callback
     *
     * @var string
     */
    public $callbackURL;

    /**
     * @description The type of the callback event. You can specify multiple values separated with commas (,). ProduceMediaComplete: indicates that the editing and production task is complete.
     *
     * @example ProduceMediaComplete
     *
     * @var string
     */
    public $eventTypeList;
    protected $_name = [
        'authKey'           => 'AuthKey',
        'authSwitch'        => 'AuthSwitch',
        'callbackQueueName' => 'CallbackQueueName',
        'callbackType'      => 'CallbackType',
        'callbackURL'       => 'CallbackURL',
        'eventTypeList'     => 'EventTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->authSwitch) {
            $res['AuthSwitch'] = $this->authSwitch;
        }
        if (null !== $this->callbackQueueName) {
            $res['CallbackQueueName'] = $this->callbackQueueName;
        }
        if (null !== $this->callbackType) {
            $res['CallbackType'] = $this->callbackType;
        }
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetEventCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['AuthSwitch'])) {
            $model->authSwitch = $map['AuthSwitch'];
        }
        if (isset($map['CallbackQueueName'])) {
            $model->callbackQueueName = $map['CallbackQueueName'];
        }
        if (isset($map['CallbackType'])) {
            $model->callbackType = $map['CallbackType'];
        }
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }
        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = $map['EventTypeList'];
        }

        return $model;
    }
}
