<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateXpackMonitorConfigRequest extends Model
{
    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $endpoints;

    /**
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @example elastic
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'enable'      => 'enable',
        'endpoints'   => 'endpoints',
        'password'    => 'password',
        'userName'    => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->endpoints) {
            $res['endpoints'] = $this->endpoints;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateXpackMonitorConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = $map['endpoints'];
            }
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
