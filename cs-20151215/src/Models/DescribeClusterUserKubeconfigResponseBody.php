<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterUserKubeconfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $expiration;
    protected $_name = [
        'config' => 'config',
        'expiration' => 'expiration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
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
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }

        return $model;
    }
}
