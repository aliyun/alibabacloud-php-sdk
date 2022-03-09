<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class DeleteProjectTransModelRequest extends Model
{
    /**
     * @var int
     */
    public $taskId;

    /**
     * @description 转换图纸id
     *
     * @var int
     */
    public $transModelId;
    protected $_name = [
        'taskId'       => 'TaskId',
        'transModelId' => 'TransModelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->transModelId) {
            $res['TransModelId'] = $this->transModelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProjectTransModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TransModelId'])) {
            $model->transModelId = $map['TransModelId'];
        }

        return $model;
    }
}
