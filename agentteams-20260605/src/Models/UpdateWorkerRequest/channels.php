<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateWorkerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateWorkerRequest\channels\config;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateWorkerRequest\channels\secrets;

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
     * @var secrets
     */
    public $secrets;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'enabled' => 'Enabled',
        'secrets' => 'Secrets',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->secrets) {
            $this->secrets->validate();
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

        if (null !== $this->secrets) {
            $res['Secrets'] = null !== $this->secrets ? $this->secrets->toArray($noStream) : $this->secrets;
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

        if (isset($map['Secrets'])) {
            $model->secrets = secrets::fromMap($map['Secrets']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
