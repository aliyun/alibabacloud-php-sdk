<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class StartAIAgentOutboundCallRequest extends Model
{
    /**
     * @var string
     */
    public $AIAgentId;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var AIAgentOutboundCallConfig
     */
    public $config;

    /**
     * @var string
     */
    public $imsAIAgentFreeObCall;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'calledNumber' => 'CalledNumber',
        'callerNumber' => 'CallerNumber',
        'config' => 'Config',
        'imsAIAgentFreeObCall' => 'ImsAIAgentFreeObCall',
        'sessionId' => 'SessionId',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->imsAIAgentFreeObCall) {
            $res['ImsAIAgentFreeObCall'] = $this->imsAIAgentFreeObCall;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['Config'])) {
            $model->config = AIAgentOutboundCallConfig::fromMap($map['Config']);
        }

        if (isset($map['ImsAIAgentFreeObCall'])) {
            $model->imsAIAgentFreeObCall = $map['ImsAIAgentFreeObCall'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
