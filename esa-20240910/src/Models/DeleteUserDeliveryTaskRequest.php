<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserDeliveryTaskRequest extends Model
{
    /**
     * @description The name of the delivery task.
     *
     * This parameter is required.
     *
     * @example test-project
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserDeliveryTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
