<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GenerateOnceTaskRequest extends Model
{
    /**
     * @description The additional information.
     *
     * This parameter is required.
     * @example {"mode":1,"problemType":"offline","uuids":"inet-795dcad1-360f-49d2-b01e-b7da7f1c****"}
     *
     * @var string
     */
    public $param;

    /**
     * @description The source of the scan task.
     *
     * @example Manual
     *
     * @var string
     */
    public $source;

    /**
     * @description The name of the scan task. Valid values:
     *
     *   **CLIENT_PROBLEM_CHECK**: a client diagnosis task
     *   **CLIENT_DEV_OPS**: an O\\&M task of Cloud Assistant
     *   **ASSET_SECURITY_CHECK**: a task of asset information collection
     *
     * This parameter is required.
     * @example CLIENT_PROBLEM_CHECK
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the scan task. Valid values:
     *
     *   **CLIENT_PROBLEM_CHECK**: a client diagnosis task
     *   **CLIENT_DEV_OPS**: an O\\&M task of Cloud Assistant
     *   **ASSET_SECURITY_CHECK**: a task of asset information collection
     *
     * This parameter is required.
     * @example CLIENT_PROBLEM_CHECK
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'param'    => 'Param',
        'source'   => 'Source',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOnceTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
