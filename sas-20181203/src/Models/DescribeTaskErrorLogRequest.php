<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeTaskErrorLogRequest extends Model
{
    /**
     * @description The ID of the task.
     *
     * >  You can call the DescribeImageFixTask operation to query the IDs of tasks.
     * @example ivf-6e520160-205d-4801-b8e9-9e7e****
     *
     * @var string
     */
    public $buildTaskId;
    protected $_name = [
        'buildTaskId' => 'BuildTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildTaskId) {
            $res['BuildTaskId'] = $this->buildTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskErrorLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTaskId'])) {
            $model->buildTaskId = $map['BuildTaskId'];
        }

        return $model;
    }
}
