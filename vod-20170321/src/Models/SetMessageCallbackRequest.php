<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetMessageCallbackRequest extends Model
{
    /**
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @description The operation that you want to perform. Set the value to **SetMessageCallback**.
     *
     * @example dsf346dvet
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The ID of the request.
     *
     * @example on
     *
     * @var string
     */
    public $authSwitch;

    /**
     * @description The type of the callback event. If you do not set this parameter, notifications for all types of events are disabled. If you set this parameter to ALL, notifications for all types of events are enabled. You can specify the event types for which notifications are enabled. Separate multiple event types with commas (,). For more information about the valid values of this parameter, see [Event type](~~55627~~).
     *
     * @example HTTP
     *
     * @var string
     */
    public $callbackType;

    /**
     * @description The name of the MNS queue. This parameter only takes effect when the CallbackType parameter is set to MNS.
     *
     * @example http://developer.aliyundoc.com
     *
     * @var string
     */
    public $callbackURL;

    /**
     * @description Specifies whether to enable callback authentication. This parameter only takes effect when the CallbackType parameter is set to HTTP. Valid values:
     *
     *   **on**: enables authentication.
     *   **off**: disables authentication.
     *
     * @example FileUploadComplete
     *
     * @var string
     */
    public $eventTypeList;

    /**
     * @description The cryptographic key. This parameter only takes effect when the CallbackType parameter is set to HTTP. The key can be up to 32 characters in length and must contain uppercase letters, lowercase letters, and digits.
     *
     * @example http://****.mns.cn-shanghai.aliyuncs.com/
     *
     * @var string
     */
    public $mnsEndpoint;

    /**
     * @description Sets the callback method, callback URL, and event type of an event notification.
     *
     * @example quene_name
     *
     * @var string
     */
    public $mnsQueueName;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'appId'         => 'AppId',
        'authKey'       => 'AuthKey',
        'authSwitch'    => 'AuthSwitch',
        'callbackType'  => 'CallbackType',
        'callbackURL'   => 'CallbackURL',
        'eventTypeList' => 'EventTypeList',
        'mnsEndpoint'   => 'MnsEndpoint',
        'mnsQueueName'  => 'MnsQueueName',
        'ownerAccount'  => 'OwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->authSwitch) {
            $res['AuthSwitch'] = $this->authSwitch;
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
        if (null !== $this->mnsEndpoint) {
            $res['MnsEndpoint'] = $this->mnsEndpoint;
        }
        if (null !== $this->mnsQueueName) {
            $res['MnsQueueName'] = $this->mnsQueueName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetMessageCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['AuthSwitch'])) {
            $model->authSwitch = $map['AuthSwitch'];
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
        if (isset($map['MnsEndpoint'])) {
            $model->mnsEndpoint = $map['MnsEndpoint'];
        }
        if (isset($map['MnsQueueName'])) {
            $model->mnsQueueName = $map['MnsQueueName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
