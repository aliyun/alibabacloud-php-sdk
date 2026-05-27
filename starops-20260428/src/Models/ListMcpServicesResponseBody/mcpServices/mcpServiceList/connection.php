<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\ListMcpServicesResponseBody\mcpServices\mcpServiceList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListMcpServicesResponseBody\mcpServices\mcpServiceList\connection\auth;

class connection extends Model
{
    /**
     * @var auth
     */
    public $auth;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $transport;
    protected $_name = [
        'auth' => 'auth',
        'endpoint' => 'endpoint',
        'platform' => 'platform',
        'timeout' => 'timeout',
        'transport' => 'transport',
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
            $res['auth'] = null !== $this->auth ? $this->auth->toArray($noStream) : $this->auth;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->transport) {
            $res['transport'] = $this->transport;
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
        if (isset($map['auth'])) {
            $model->auth = auth::fromMap($map['auth']);
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['transport'])) {
            $model->transport = $map['transport'];
        }

        return $model;
    }
}
