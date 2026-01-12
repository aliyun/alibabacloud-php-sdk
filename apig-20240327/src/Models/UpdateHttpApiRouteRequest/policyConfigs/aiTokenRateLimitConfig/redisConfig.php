<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiTokenRateLimitConfig;

use AlibabaCloud\Dara\Model;

class redisConfig extends Model
{
    /**
     * @var int
     */
    public $databaseNumber;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'databaseNumber' => 'databaseNumber',
        'host' => 'host',
        'password' => 'password',
        'port' => 'port',
        'timeout' => 'timeout',
        'username' => 'username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseNumber) {
            $res['databaseNumber'] = $this->databaseNumber;
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['databaseNumber'])) {
            $model->databaseNumber = $map['databaseNumber'];
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
