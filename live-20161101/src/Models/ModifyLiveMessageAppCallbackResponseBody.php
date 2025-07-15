<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageAppCallbackResponseBody extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The signature of the interactive messaging application. It is required by the interactive messaging SDK.
     *
     * @example **************************************************************************
     *
     * @var string
     */
    public $appSign;

    /**
     * @description Indicates whether authentication is required for event callbacks. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $eventCallbackNeedAuthentication;

    /**
     * @description The callback URL for events such as user logon, logoff, joining a group, and leaving a group. This parameter is not returned if it has an empty value.
     *
     * @example http://example.aliyundoc.com/examplecallback
     *
     * @var string
     */
    public $eventCallbackUrl;

    /**
     * @description The request ID.
     *
     * @example 1F0FFEAD-B7D5-1D4A-A6B9-8C63ADF6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId' => 'AppId',
        'appSign' => 'AppSign',
        'eventCallbackNeedAuthentication' => 'EventCallbackNeedAuthentication',
        'eventCallbackUrl' => 'EventCallbackUrl',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSign) {
            $res['AppSign'] = $this->appSign;
        }
        if (null !== $this->eventCallbackNeedAuthentication) {
            $res['EventCallbackNeedAuthentication'] = $this->eventCallbackNeedAuthentication;
        }
        if (null !== $this->eventCallbackUrl) {
            $res['EventCallbackUrl'] = $this->eventCallbackUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageAppCallbackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSign'])) {
            $model->appSign = $map['AppSign'];
        }
        if (isset($map['EventCallbackNeedAuthentication'])) {
            $model->eventCallbackNeedAuthentication = $map['EventCallbackNeedAuthentication'];
        }
        if (isset($map['EventCallbackUrl'])) {
            $model->eventCallbackUrl = $map['EventCallbackUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
