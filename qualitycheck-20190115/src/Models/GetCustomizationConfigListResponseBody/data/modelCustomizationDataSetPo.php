<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponseBody\data;

use AlibabaCloud\Tea\Model;

class modelCustomizationDataSetPo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modeCustomizationId;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var int
     */
    public $modelStatus;

    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'modeCustomizationId' => 'ModeCustomizationId',
        'modelId'             => 'ModelId',
        'modelName'           => 'ModelName',
        'modelStatus'         => 'ModelStatus',
        'taskType'            => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modeCustomizationId) {
            $res['ModeCustomizationId'] = $this->modeCustomizationId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelStatus) {
            $res['ModelStatus'] = $this->modelStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelCustomizationDataSetPo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModeCustomizationId'])) {
            $model->modeCustomizationId = $map['ModeCustomizationId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelStatus'])) {
            $model->modelStatus = $map['ModelStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
