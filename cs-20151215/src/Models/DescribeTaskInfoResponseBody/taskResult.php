<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class taskResult extends Model
{
    /**
     * @description The resources that are managed by the task. For a scale-out task, the value of this parameter is the ID of the instance that is added by the task.
     *
     * @example i-xxx
     *
     * @var string
     */
    public $data;

    /**
     * @description The status of the scale-out task. Valid values:
     *
     *   `success`: The scale-out task is successful.
     *   `success`: The scale-out task failed.
     *   `initial`: The scale-out task is being initialized.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'data' => 'data',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
