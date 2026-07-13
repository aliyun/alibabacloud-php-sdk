<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListServiceEndpointsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListServiceEndpointsResponseBody\items\endpointConfig\auth;

class endpointConfig extends Model
{
    /**
     * @var auth
     */
    public $auth;
    protected $_name = [
        'auth' => 'Auth',
    ];

    public function validate()
    {
        if (null !== $this->auth) {
            $this->auth->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = null !== $this->auth ? $this->auth->toArray($noStream) : $this->auth;
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
        if (isset($map['Auth'])) {
            $model->auth = auth::fromMap($map['Auth']);
        }

        return $model;
    }
}
