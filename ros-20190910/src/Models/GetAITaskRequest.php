<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetAITaskRequest extends Model
{
    /**
     * @example Disabled
     *
     * @var string
     */
    public $outputOption;

    /**
     * @example t-asasas*****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'outputOption' => 'OutputOption',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputOption) {
            $res['OutputOption'] = $this->outputOption;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAITaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputOption'])) {
            $model->outputOption = $map['OutputOption'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
