<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeNotifyConfigResponseBody extends Model
{
    /**
     * @example http://customer.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableNotify;

    /**
     * @example agent_start,agent_stop,error
     *
     * @var string
     */
    public $eventTypes;

    /**
     * @example 7B117AF5-2A16-412C-B127-FA6175ED1AD0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example eyJhcHBpZCI6ICIxMjM0MTIzNxxxxx
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeNotifyConfigResponseBody
     */
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
