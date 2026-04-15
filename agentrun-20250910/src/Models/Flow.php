<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class Flow extends Model
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
    public $executionRoleArn;

    /**
     * @var string
     */
    public $externalStorageLocation;

    /**
     * @var string
     */
    public $flowArn;

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
    public $lastUpdatedAt;

    /**
     * @var LoggingConfiguration
     */
    public $loggingConfiguration;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var TracingConfiguration
     */
    public $tracingConfiguration;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'createdAt' => 'createdAt',
        'definition' => 'definition',
        'description' => 'description',
        'environmentConfiguration' => 'environmentConfiguration',
        'executionRoleArn' => 'executionRoleArn',
        'externalStorageLocation' => 'externalStorageLocation',
        'flowArn' => 'flowArn',
        'flowId' => 'flowId',
        'flowName' => 'flowName',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'loggingConfiguration' => 'loggingConfiguration',
        'resourceGroupId' => 'resourceGroupId',
        'tracingConfiguration' => 'tracingConfiguration',
        'workspaceId' => 'workspaceId',
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

        if (null !== $this->executionRoleArn) {
            $res['executionRoleArn'] = $this->executionRoleArn;
        }

        if (null !== $this->externalStorageLocation) {
            $res['externalStorageLocation'] = $this->externalStorageLocation;
        }

        if (null !== $this->flowArn) {
            $res['flowArn'] = $this->flowArn;
        }

        if (null !== $this->flowId) {
            $res['flowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['flowName'] = $this->flowName;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->loggingConfiguration) {
            $res['loggingConfiguration'] = null !== $this->loggingConfiguration ? $this->loggingConfiguration->toArray($noStream) : $this->loggingConfiguration;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tracingConfiguration) {
            $res['tracingConfiguration'] = null !== $this->tracingConfiguration ? $this->tracingConfiguration->toArray($noStream) : $this->tracingConfiguration;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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

        if (isset($map['executionRoleArn'])) {
            $model->executionRoleArn = $map['executionRoleArn'];
        }

        if (isset($map['externalStorageLocation'])) {
            $model->externalStorageLocation = $map['externalStorageLocation'];
        }

        if (isset($map['flowArn'])) {
            $model->flowArn = $map['flowArn'];
        }

        if (isset($map['flowId'])) {
            $model->flowId = $map['flowId'];
        }

        if (isset($map['flowName'])) {
            $model->flowName = $map['flowName'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['loggingConfiguration'])) {
            $model->loggingConfiguration = LoggingConfiguration::fromMap($map['loggingConfiguration']);
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['tracingConfiguration'])) {
            $model->tracingConfiguration = TracingConfiguration::fromMap($map['tracingConfiguration']);
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
