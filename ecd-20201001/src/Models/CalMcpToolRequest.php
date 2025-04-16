<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models;

use AlibabaCloud\Dara\Model;

class CalMcpToolRequest extends Model
{
    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $authorization;

    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $server;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tool;
    protected $_name = [
        'args' => 'Args',
        'authorization' => 'Authorization',
        'externalUserId' => 'ExternalUserId',
        'name' => 'Name',
        'server' => 'Server',
        'sessionId' => 'SessionId',
        'tool' => 'Tool',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }

        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
        }

        if (null !== $this->externalUserId) {
            $res['ExternalUserId'] = $this->externalUserId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->tool) {
            $res['Tool'] = $this->tool;
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
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }

        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        if (isset($map['ExternalUserId'])) {
            $model->externalUserId = $map['ExternalUserId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Tool'])) {
            $model->tool = $map['Tool'];
        }

        return $model;
    }
}
