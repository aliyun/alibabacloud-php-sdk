<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\auth;

class body extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @var auth
     */
    public $auth;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $swaggerConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'addresses' => 'addresses',
        'auth' => 'auth',
        'description' => 'description',
        'name' => 'name',
        'protocol' => 'protocol',
        'swaggerConfig' => 'swaggerConfig',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (null !== $this->auth) {
            $this->auth->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['addresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->auth) {
            $res['auth'] = null !== $this->auth ? $this->auth->toArray($noStream) : $this->auth;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
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
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['addresses'] as $item1) {
                    $model->addresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['auth'])) {
            $model->auth = auth::fromMap($map['auth']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
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
