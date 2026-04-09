<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class FlowVersion extends Model
{
    /**
     * @var string
     */
    public $createdAt;

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
    public $externalStorageLocation;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowVersion;

    /**
     * @var LoggingConfiguration
     */
    public $loggingConfiguration;

    /**
     * @var TracingConfiguration
     */
    public $tracingConfiguration;
    protected $_name = [
        'createdAt' => 'createdAt',
        'definition' => 'definition',
        'description' => 'description',
        'environmentConfiguration' => 'environmentConfiguration',
        'externalStorageLocation' => 'externalStorageLocation',
        'flowId' => 'flowId',
        'flowName' => 'flowName',
        'flowVersion' => 'flowVersion',
        'loggingConfiguration' => 'loggingConfiguration',
        'tracingConfiguration' => 'tracingConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->environmentConfiguration) {
            $this->environmentConfiguration->validate();
        }
        if (null !== $this->loggingConfiguration) {
            $this->loggingConfiguration->validate();
        }
        if (null !== $this->tracingConfiguration) {
            $this->tracingConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->definition) {
            $res['definition'] = $this->definition;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environmentConfiguration) {
            $res['environmentConfiguration'] = null !== $this->environmentConfiguration ? $this->environmentConfiguration->toArray($noStream) : $this->environmentConfiguration;
        }

        if (null !== $this->externalStorageLocation) {
            $res['externalStorageLocation'] = $this->externalStorageLocation;
        }

        if (null !== $this->flowId) {
            $res['flowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['flowName'] = $this->flowName;
        }

        if (null !== $this->flowVersion) {
            $res['flowVersion'] = $this->flowVersion;
        }

        if (null !== $this->loggingConfiguration) {
            $res['loggingConfiguration'] = null !== $this->loggingConfiguration ? $this->loggingConfiguration->toArray($noStream) : $this->loggingConfiguration;
        }

        if (null !== $this->tracingConfiguration) {
            $res['tracingConfiguration'] = null !== $this->tracingConfiguration ? $this->tracingConfiguration->toArray($noStream) : $this->tracingConfiguration;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['definition'])) {
            $model->definition = $map['definition'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['environmentConfiguration'])) {
            $model->environmentConfiguration = EnvironmentConfiguration::fromMap($map['environmentConfiguration']);
        }

        if (isset($map['externalStorageLocation'])) {
            $model->externalStorageLocation = $map['externalStorageLocation'];
        }

        if (isset($map['flowId'])) {
            $model->flowId = $map['flowId'];
        }

        if (isset($map['flowName'])) {
            $model->flowName = $map['flowName'];
        }

        if (isset($map['flowVersion'])) {
            $model->flowVersion = $map['flowVersion'];
        }

        if (isset($map['loggingConfiguration'])) {
            $model->loggingConfiguration = LoggingConfiguration::fromMap($map['loggingConfiguration']);
        }

        if (isset($map['tracingConfiguration'])) {
            $model->tracingConfiguration = TracingConfiguration::fromMap($map['tracingConfiguration']);
        }

        return $model;
    }
}
