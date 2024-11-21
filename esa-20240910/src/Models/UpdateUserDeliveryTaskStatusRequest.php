<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserDeliveryTaskStatusRequest extends Model
{
    /**
     * @description Enables or disables the delivery task. Valid values: online and offline.
     *
     * This parameter is required.
     * @example online
     *
     * @var string
     */
    public $method;

    /**
     * @description The name of the delivery task.
     *
     * This parameter is required.
     * @example test_project
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'method'   => 'Method',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserDeliveryTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
