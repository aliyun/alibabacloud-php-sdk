<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginRequest\body\auth;

class body extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var auth
     */
    public $auth;

    /**
     * @var string
     */
    public $swaggerConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'address' => 'address',
        'auth' => 'auth',
        'swaggerConfig' => 'swaggerConfig',
        'type' => 'type',
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
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->auth) {
            $res['auth'] = null !== $this->auth ? $this->auth->toArray($noStream) : $this->auth;
        }

        if (null !== $this->swaggerConfig) {
            $res['swaggerConfig'] = $this->swaggerConfig;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['auth'])) {
            $model->auth = auth::fromMap($map['auth']);
        }

        if (isset($map['swaggerConfig'])) {
            $model->swaggerConfig = $map['swaggerConfig'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
