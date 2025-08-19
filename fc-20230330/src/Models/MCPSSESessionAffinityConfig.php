<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class MCPSSESessionAffinityConfig extends Model
{
    /**
     * @var int
     */
    public $sessionConcurrencyPerInstance;

    /**
     * @var string
     */
    public $sseEndpointPath;
    protected $_name = [
        'sessionConcurrencyPerInstance' => 'sessionConcurrencyPerInstance',
        'sseEndpointPath' => 'sseEndpointPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionConcurrencyPerInstance) {
            $res['sessionConcurrencyPerInstance'] = $this->sessionConcurrencyPerInstance;
        }

        if (null !== $this->sseEndpointPath) {
            $res['sseEndpointPath'] = $this->sseEndpointPath;
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
        if (isset($map['sessionConcurrencyPerInstance'])) {
            $model->sessionConcurrencyPerInstance = $map['sessionConcurrencyPerInstance'];
        }

        if (isset($map['sseEndpointPath'])) {
            $model->sseEndpointPath = $map['sseEndpointPath'];
        }

        return $model;
    }
}
