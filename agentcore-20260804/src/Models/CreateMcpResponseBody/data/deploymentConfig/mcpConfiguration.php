<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpResponseBody\data\deploymentConfig;

use AlibabaCloud\Dara\Model;

class mcpConfiguration extends Model
{
    /**
     * @var string
     */
    public $endpointPath;

    /**
     * @var int
     */
    public $sessionConcurrencyPerInstance;

    /**
     * @var int
     */
    public $sessionIdleTimeoutSeconds;

    /**
     * @var int
     */
    public $sessionMaxLifetimeSeconds;
    protected $_name = [
        'endpointPath' => 'endpointPath',
        'sessionConcurrencyPerInstance' => 'sessionConcurrencyPerInstance',
        'sessionIdleTimeoutSeconds' => 'sessionIdleTimeoutSeconds',
        'sessionMaxLifetimeSeconds' => 'sessionMaxLifetimeSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointPath) {
            $res['endpointPath'] = $this->endpointPath;
        }

        if (null !== $this->sessionConcurrencyPerInstance) {
            $res['sessionConcurrencyPerInstance'] = $this->sessionConcurrencyPerInstance;
        }

        if (null !== $this->sessionIdleTimeoutSeconds) {
            $res['sessionIdleTimeoutSeconds'] = $this->sessionIdleTimeoutSeconds;
        }

        if (null !== $this->sessionMaxLifetimeSeconds) {
            $res['sessionMaxLifetimeSeconds'] = $this->sessionMaxLifetimeSeconds;
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
        if (isset($map['endpointPath'])) {
            $model->endpointPath = $map['endpointPath'];
        }

        if (isset($map['sessionConcurrencyPerInstance'])) {
            $model->sessionConcurrencyPerInstance = $map['sessionConcurrencyPerInstance'];
        }

        if (isset($map['sessionIdleTimeoutSeconds'])) {
            $model->sessionIdleTimeoutSeconds = $map['sessionIdleTimeoutSeconds'];
        }

        if (isset($map['sessionMaxLifetimeSeconds'])) {
            $model->sessionMaxLifetimeSeconds = $map['sessionMaxLifetimeSeconds'];
        }

        return $model;
    }
}
