<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateCodeInterpreterInput extends Model
{
    /**
     * @var string
     */
    public $codeInterpreterName;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionRoleArn;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var NetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var int
     */
    public $sessionIdleTimeoutSeconds;
    protected $_name = [
        'codeInterpreterName' => 'codeInterpreterName',
        'cpu' => 'cpu',
        'credentialId' => 'credentialId',
        'description' => 'description',
        'executionRoleArn' => 'executionRoleArn',
        'memory' => 'memory',
        'networkConfiguration' => 'networkConfiguration',
        'sessionIdleTimeoutSeconds' => 'sessionIdleTimeoutSeconds',
    ];

    public function validate()
    {
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeInterpreterName) {
            $res['codeInterpreterName'] = $this->codeInterpreterName;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executionRoleArn) {
            $res['executionRoleArn'] = $this->executionRoleArn;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->sessionIdleTimeoutSeconds) {
            $res['sessionIdleTimeoutSeconds'] = $this->sessionIdleTimeoutSeconds;
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
        if (isset($map['codeInterpreterName'])) {
            $model->codeInterpreterName = $map['codeInterpreterName'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executionRoleArn'])) {
            $model->executionRoleArn = $map['executionRoleArn'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = NetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['sessionIdleTimeoutSeconds'])) {
            $model->sessionIdleTimeoutSeconds = $map['sessionIdleTimeoutSeconds'];
        }

        return $model;
    }
}
