<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\CredentialPublicConfig;

use AlibabaCloud\Dara\Model;

class remoteConfig extends Model
{
    /**
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'timeout' => 'timeout',
        'ttl' => 'ttl',
        'uri' => 'uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
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
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        if (isset($map['uri'])) {
            $model->uri = $map['uri'];
        }

        return $model;
    }
}
