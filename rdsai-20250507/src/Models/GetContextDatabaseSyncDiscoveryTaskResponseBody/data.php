<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncDiscoveryTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cancelRequestedAt;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var int
     */
    public $containers;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $pluginRef;

    /**
     * @var int
     */
    public $scanned;

    /**
     * @var string
     */
    public $sourceConfig;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'cancelRequestedAt' => 'CancelRequestedAt',
        'connectionId' => 'ConnectionId',
        'containers' => 'Containers',
        'createdAt' => 'CreatedAt',
        'error' => 'Error',
        'pluginRef' => 'PluginRef',
        'scanned' => 'Scanned',
        'sourceConfig' => 'SourceConfig',
        'sourceId' => 'SourceId',
        'state' => 'State',
        'taskId' => 'TaskId',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelRequestedAt) {
            $res['CancelRequestedAt'] = $this->cancelRequestedAt;
        }

        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->containers) {
            $res['Containers'] = $this->containers;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->pluginRef) {
            $res['PluginRef'] = $this->pluginRef;
        }

        if (null !== $this->scanned) {
            $res['Scanned'] = $this->scanned;
        }

        if (null !== $this->sourceConfig) {
            $res['SourceConfig'] = $this->sourceConfig;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['CancelRequestedAt'])) {
            $model->cancelRequestedAt = $map['CancelRequestedAt'];
        }

        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['Containers'])) {
            $model->containers = $map['Containers'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['PluginRef'])) {
            $model->pluginRef = $map['PluginRef'];
        }

        if (isset($map['Scanned'])) {
            $model->scanned = $map['Scanned'];
        }

        if (isset($map['SourceConfig'])) {
            $model->sourceConfig = $map['SourceConfig'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
