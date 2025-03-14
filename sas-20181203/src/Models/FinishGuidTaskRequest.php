<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class FinishGuidTaskRequest extends Model
{
    /**
     * @description The name of the task type.
     *
     * This parameter is required.
     *
     * @example guide_sub_task_config_add_collection
     *
     * @var string
     */
    public $taskTypeName;
    protected $_name = [
        'taskTypeName' => 'TaskTypeName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskTypeName) {
            $res['TaskTypeName'] = $this->taskTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FinishGuidTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskTypeName'])) {
            $model->taskTypeName = $map['TaskTypeName'];
        }

        return $model;
    }
}
