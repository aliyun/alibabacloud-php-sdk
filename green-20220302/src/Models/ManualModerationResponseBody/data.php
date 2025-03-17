<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ManualModerationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2a5389eb-4ff8-4584-ac99-644e2a539aa1
     *
     * @var string
     */
    public $dataId;

    /**
     * @example xxxxx-xxxxx
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'dataId' => 'DataId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
