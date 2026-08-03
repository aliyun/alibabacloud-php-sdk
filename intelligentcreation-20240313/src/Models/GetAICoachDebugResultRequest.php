<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class GetAICoachDebugResultRequest extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $scriptDebugId;

    /**
     * @var string
     */
    public $scriptRecordId;

    /**
     * @var string
     */
    public $scriptSnapshotId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'dataId' => 'dataId',
        'dataType' => 'dataType',
        'scriptDebugId' => 'scriptDebugId',
        'scriptRecordId' => 'scriptRecordId',
        'scriptSnapshotId' => 'scriptSnapshotId',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['dataId'] = $this->dataId;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->scriptDebugId) {
            $res['scriptDebugId'] = $this->scriptDebugId;
        }

        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
        }

        if (null !== $this->scriptSnapshotId) {
            $res['scriptSnapshotId'] = $this->scriptSnapshotId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['dataId'])) {
            $model->dataId = $map['dataId'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['scriptDebugId'])) {
            $model->scriptDebugId = $map['scriptDebugId'];
        }

        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }

        if (isset($map['scriptSnapshotId'])) {
            $model->scriptSnapshotId = $map['scriptSnapshotId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
