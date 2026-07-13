<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerResponseBody\data\channels\config;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerResponseBody\data\channels\secretStatus;

class channels extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var secretStatus
     */
    public $secretStatus;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'enabled' => 'Enabled',
        'secretStatus' => 'SecretStatus',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->secretStatus) {
            $this->secretStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->secretStatus) {
            $res['SecretStatus'] = null !== $this->secretStatus ? $this->secretStatus->toArray($noStream) : $this->secretStatus;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['SecretStatus'])) {
            $model->secretStatus = secretStatus::fromMap($map['SecretStatus']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
