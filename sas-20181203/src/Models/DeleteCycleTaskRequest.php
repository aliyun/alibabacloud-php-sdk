<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteCycleTaskRequest extends Model
{
    /**
     * @description The ID of the task configuration.
     *
     * >  You can call the [DescribeCycleTaskList](~~DescribeCycleTaskList~~) operation to query the IDs of task configurations.
     * @example 435f626256ebf564cf5ba966a539****
     *
     * @var string
     */
    public $configId;
    protected $_name = [
        'configId' => 'ConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCycleTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        return $model;
    }
}
