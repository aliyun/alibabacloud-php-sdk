<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSCIMResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSCIMResponseBody\data\configuration;

class data extends Model
{
    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var string
     */
    public $operationStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $syncEnabled;
    protected $_name = [
        'configuration' => 'configuration',
        'operationStatus' => 'operationStatus',
        'status' => 'status',
        'syncEnabled' => 'syncEnabled',
    ];

    public function validate()
    {
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
        }

        if (null !== $this->operationStatus) {
            $res['operationStatus'] = $this->operationStatus;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->syncEnabled) {
            $res['syncEnabled'] = $this->syncEnabled;
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
        if (isset($map['configuration'])) {
            $model->configuration = configuration::fromMap($map['configuration']);
        }

        if (isset($map['operationStatus'])) {
            $model->operationStatus = $map['operationStatus'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['syncEnabled'])) {
            $model->syncEnabled = $map['syncEnabled'];
        }

        return $model;
    }
}
