<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SetNotifyConfigRequest extends Model
{
    /**
     * @description The ID of the AI agent.
     *
     * This parameter is required.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $AIAgentId;

    /**
     * @description The URL for receiving callback notifications. By default, this parameter is left empty.
     *
     * @example http://customer.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description Specifies whether to enable event notifications.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enableNotify;

    /**
     * @description The event types. If you do not specify this parameter, all event types are selected.
     *
     *   agent_start
     *   agent_stop
     *   error
     *
     * @example agent_start,agent_stop,error
     *
     * @var string
     */
    public $eventTypes;

    /**
     * @description The authentication token for callback. The token is carried in the Authorization header of a callback request. By default, this parameter is left empty.
     *
     * @example eyJhcHBpZCI6ICIxMjM0MTIzNxxxxx
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'callbackUrl' => 'CallbackUrl',
        'enableNotify' => 'EnableNotify',
        'eventTypes' => 'EventTypes',
        'token' => 'Token',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->enableNotify) {
            $res['EnableNotify'] = $this->enableNotify;
        }
        if (null !== $this->eventTypes) {
            $res['EventTypes'] = $this->eventTypes;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetNotifyConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['EnableNotify'])) {
            $model->enableNotify = $map['EnableNotify'];
        }
        if (isset($map['EventTypes'])) {
            $model->eventTypes = $map['EventTypes'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
