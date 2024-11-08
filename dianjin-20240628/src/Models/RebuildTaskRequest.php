<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class RebuildTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $taskIds;
    protected $_name = [
        'taskIds' => 'taskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskIds) {
            $res['taskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebuildTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskIds'])) {
            if (!empty($map['taskIds'])) {
                $model->taskIds = $map['taskIds'];
            }
        }

        return $model;
    }
}
