<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetEventCallbackResponseBody extends Model
{
    /**
     * @description The authentication key. This parameter is returned only for HTTP callbacks.
     *
     * @example TestKey001
     *
     * @var string
     */
    public $authKey;

    /**
     * @description Specifies whether callback authentication is enabled. This parameter is returned only for **HTTP** callbacks. Valid values:
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
     * @description The name of the Simple Message Queue (SMQ) queue to which callback messages are sent.
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
     * @description The callback URL to which event notifications are sent.
     *
     * @example http://xxx.yyy/callback
     *
     * @var string
     */
    public $callbackURL;

    /**
     * @description The type of the callback event. Multiple values are separated with commas (,). For more information about callback event types, see [Event notification content](https://help.aliyun.com/document_detail/610204.html).
     *
     * @example ProduceMediaComplete,TranscodeComplete
     *
     * @var string
     */
    public $eventTypeList;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authKey'           => 'AuthKey',
        'authSwitch'        => 'AuthSwitch',
        'callbackQueueName' => 'CallbackQueueName',
        'callbackType'      => 'CallbackType',
        'callbackURL'       => 'CallbackURL',
        'eventTypeList'     => 'EventTypeList',
        'requestId'         => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEventCallbackResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
