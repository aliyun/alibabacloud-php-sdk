<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DescribeNotifyConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;
    /**
     * @var bool
     */
    public $enableNotify;
    /**
     * @var string
     */
    public $eventTypes;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'callbackUrl'  => 'CallbackUrl',
        'enableNotify' => 'EnableNotify',
        'eventTypes'   => 'EventTypes',
        'requestId'    => 'RequestId',
        'token'        => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->enableNotify) {
            $res['EnableNotify'] = $this->enableNotify;
        }

        if (null !== $this->eventTypes) {
            $res['EventTypes'] = $this->eventTypes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['EnableNotify'])) {
            $model->enableNotify = $map['EnableNotify'];
        }

        if (isset($map['EventTypes'])) {
            $model->eventTypes = $map['EventTypes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
