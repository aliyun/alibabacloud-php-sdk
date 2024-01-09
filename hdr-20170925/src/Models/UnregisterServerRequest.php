<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class UnregisterServerRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example sr-000jf20efavec47ucq5g
     *
     * @var string
     */
    public $serverId;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'serverId'      => 'ServerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnregisterServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}
