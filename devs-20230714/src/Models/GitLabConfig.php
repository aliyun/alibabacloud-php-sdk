<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class GitLabConfig extends Model
{
    /**
     * @example your-token
     *
     * @var string
     */
    public $token;

    /**
     * @example http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'token' => 'token',
        'uri'   => 'uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->uri) {
            $res['uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GitLabConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['uri'])) {
            $model->uri = $map['uri'];
        }

        return $model;
    }
}
