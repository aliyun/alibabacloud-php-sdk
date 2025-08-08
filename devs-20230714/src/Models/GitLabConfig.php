<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class GitLabConfig extends Model
{
    /**
     * @var bool
     */
    public $isFixedIP;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'isFixedIP' => 'isFixedIP',
        'token' => 'token',
        'uri' => 'uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isFixedIP) {
            $res['isFixedIP'] = $this->isFixedIP;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->uri) {
            $res['uri'] = $this->uri;
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
        if (isset($map['isFixedIP'])) {
            $model->isFixedIP = $map['isFixedIP'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['uri'])) {
            $model->uri = $map['uri'];
        }

        return $model;
    }
}
