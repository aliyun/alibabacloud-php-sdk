<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class externalAgentStatus extends Model
{
    /**
     * @var string
     */
    public $heartbeatStatus;

    /**
     * @var string
     */
    public $lastActiveAt;

    /**
     * @var string
     */
    public $lastHeartbeat;

    /**
     * @var string
     */
    public $localIP;

    /**
     * @var string
     */
    public $runtime;
    protected $_name = [
        'heartbeatStatus' => 'heartbeatStatus',
        'lastActiveAt' => 'lastActiveAt',
        'lastHeartbeat' => 'lastHeartbeat',
        'localIP' => 'localIP',
        'runtime' => 'runtime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->heartbeatStatus) {
            $res['heartbeatStatus'] = $this->heartbeatStatus;
        }

        if (null !== $this->lastActiveAt) {
            $res['lastActiveAt'] = $this->lastActiveAt;
        }

        if (null !== $this->lastHeartbeat) {
            $res['lastHeartbeat'] = $this->lastHeartbeat;
        }

        if (null !== $this->localIP) {
            $res['localIP'] = $this->localIP;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
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
        if (isset($map['heartbeatStatus'])) {
            $model->heartbeatStatus = $map['heartbeatStatus'];
        }

        if (isset($map['lastActiveAt'])) {
            $model->lastActiveAt = $map['lastActiveAt'];
        }

        if (isset($map['lastHeartbeat'])) {
            $model->lastHeartbeat = $map['lastHeartbeat'];
        }

        if (isset($map['localIP'])) {
            $model->localIP = $map['localIP'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }

        return $model;
    }
}
