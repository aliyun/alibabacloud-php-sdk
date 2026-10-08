<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\StartPipelineIntegratedTaskRequest;

use AlibabaCloud\Dara\Model;

class startCommand extends Model
{
    /**
     * @var int
     */
    public $byteSpeed;

    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var int
     */
    public $concurrent;

    /**
     * @var string
     */
    public $fullTaskMode;

    /**
     * @var string
     */
    public $incrementalTaskId;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $quotaGroupId;

    /**
     * @var string
     */
    public $syncMode;
    protected $_name = [
        'byteSpeed' => 'ByteSpeed',
        'checkpoint' => 'Checkpoint',
        'concurrent' => 'Concurrent',
        'fullTaskMode' => 'FullTaskMode',
        'incrementalTaskId' => 'IncrementalTaskId',
        'memory' => 'Memory',
        'nodeId' => 'NodeId',
        'quotaGroupId' => 'QuotaGroupId',
        'syncMode' => 'SyncMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byteSpeed) {
            $res['ByteSpeed'] = $this->byteSpeed;
        }

        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }

        if (null !== $this->concurrent) {
            $res['Concurrent'] = $this->concurrent;
        }

        if (null !== $this->fullTaskMode) {
            $res['FullTaskMode'] = $this->fullTaskMode;
        }

        if (null !== $this->incrementalTaskId) {
            $res['IncrementalTaskId'] = $this->incrementalTaskId;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->quotaGroupId) {
            $res['QuotaGroupId'] = $this->quotaGroupId;
        }

        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
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
        if (isset($map['ByteSpeed'])) {
            $model->byteSpeed = $map['ByteSpeed'];
        }

        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }

        if (isset($map['Concurrent'])) {
            $model->concurrent = $map['Concurrent'];
        }

        if (isset($map['FullTaskMode'])) {
            $model->fullTaskMode = $map['FullTaskMode'];
        }

        if (isset($map['IncrementalTaskId'])) {
            $model->incrementalTaskId = $map['IncrementalTaskId'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['QuotaGroupId'])) {
            $model->quotaGroupId = $map['QuotaGroupId'];
        }

        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
        }

        return $model;
    }
}
