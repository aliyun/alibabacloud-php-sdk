<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class ModifyLiveMessageAppCallbackResponseBody extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appSign;

    /**
     * @var bool
     */
    public $eventCallbackNeedAuthentication;

    /**
     * @var string
     */
    public $eventCallbackUrl;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
