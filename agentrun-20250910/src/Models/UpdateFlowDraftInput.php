<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateFlowDraftInput extends Model
{
    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $description;

    /**
     * @var EnvironmentConfiguration
     */
    public $environmentConfiguration;

    /**
     * @var string
     */
    public $executionRoleArn;

    /**
     * @var string
     */
    public $externalStorageLocation;
    protected $_name = [
        'definition' => 'definition',
        'description' => 'description',
        'environmentConfiguration' => 'environmentConfiguration',
        'executionRoleArn' => 'executionRoleArn',
        'externalStorageLocation' => 'externalStorageLocation',
    ];

    public function validate()
    {
        if (null !== $this->environmentConfiguration) {
            $this->environmentConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->definition) {
            $res['definition'] = $this->definition;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environmentConfiguration) {
            $res['environmentConfiguration'] = null !== $this->environmentConfiguration ? $this->environmentConfiguration->toArray($noStream) : $this->environmentConfiguration;
        }

        if (null !== $this->executionRoleArn) {
            $res['executionRoleArn'] = $this->executionRoleArn;
        }

        if (null !== $this->externalStorageLocation) {
            $res['externalStorageLocation'] = $this->externalStorageLocation;
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
        if (isset($map['definition'])) {
            $model->definition = $map['definition'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['environmentConfiguration'])) {
            $model->environmentConfiguration = EnvironmentConfiguration::fromMap($map['environmentConfiguration']);
        }

        if (isset($map['executionRoleArn'])) {
            $model->executionRoleArn = $map['executionRoleArn'];
        }

        if (isset($map['externalStorageLocation'])) {
            $model->externalStorageLocation = $map['externalStorageLocation'];
        }

        return $model;
    }
}
