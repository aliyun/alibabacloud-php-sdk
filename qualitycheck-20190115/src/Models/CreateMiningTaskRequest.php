<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class CreateMiningTaskRequest extends Model
{
    /**
     * @example 123456
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @example 123.22.com/11.csv
     *
     * @var string
     */
    public $filePath;

    /**
     * @example {"startDate":"20250505"}
     *
     * @var string
     */
    public $param;

    /**
     * @example demandMining
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'callbackUrl' => 'CallbackUrl',
        'filePath' => 'FilePath',
        'param' => 'Param',
        'taskType' => 'TaskType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMiningTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
