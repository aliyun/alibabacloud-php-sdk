<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpResponseBody\data\originProbe;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpResponseBody\data\originProbe\lastResult\actualConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpResponseBody\data\originProbe\lastResult\error;

class lastResult extends Model
{
    /**
     * @var actualConfiguration
     */
    public $actualConfiguration;

    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $probedAt;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'actualConfiguration' => 'actualConfiguration',
        'error' => 'error',
        'probedAt' => 'probedAt',
        'stage' => 'stage',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->actualConfiguration) {
            $this->actualConfiguration->validate();
        }
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualConfiguration) {
            $res['actualConfiguration'] = null !== $this->actualConfiguration ? $this->actualConfiguration->toArray($noStream) : $this->actualConfiguration;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->probedAt) {
            $res['probedAt'] = $this->probedAt;
        }

        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['actualConfiguration'])) {
            $model->actualConfiguration = actualConfiguration::fromMap($map['actualConfiguration']);
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['probedAt'])) {
            $model->probedAt = $map['probedAt'];
        }

        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
