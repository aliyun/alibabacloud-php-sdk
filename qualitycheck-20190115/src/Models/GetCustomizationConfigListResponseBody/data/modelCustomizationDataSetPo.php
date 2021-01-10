<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponseBody\data;

use AlibabaCloud\Tea\Model;

class modelCustomizationDataSetPo extends Model
{
    /**
     * @var int
     */
    public $taskType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $modelStatus;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modeCustomizationId;
    protected $_name = [
        'taskType'            => 'TaskType',
        'createTime'          => 'CreateTime',
        'modelStatus'         => 'ModelStatus',
        'modelName'           => 'ModelName',
        'modelId'             => 'ModelId',
        'modeCustomizationId' => 'ModeCustomizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modelStatus) {
            $res['ModelStatus'] = $this->modelStatus;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modeCustomizationId) {
            $res['ModeCustomizationId'] = $this->modeCustomizationId;
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModelStatus'])) {
            $model->modelStatus = $map['ModelStatus'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModeCustomizationId'])) {
            $model->modeCustomizationId = $map['ModeCustomizationId'];
        }

        return $model;
    }
}
