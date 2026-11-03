<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateContextStoreResponseBody\config;

class UpdateContextStoreResponseBody extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $strategyVersion;
    protected $_name = [
        'config' => 'config',
        'requestId' => 'requestId',
        'strategyVersion' => 'strategyVersion',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->strategyVersion) {
            $res['strategyVersion'] = $this->strategyVersion;
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
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['strategyVersion'])) {
            $model->strategyVersion = $map['strategyVersion'];
        }

        return $model;
    }
}
