<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class CreateAsyncTaskRequest extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskParams;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'taskType'        => 'TaskType',
        'taskParams'      => 'TaskParams',
    ];

    public function validate()
    {
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('taskParams', $this->taskParams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAsyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }

        return $model;
    }
}
