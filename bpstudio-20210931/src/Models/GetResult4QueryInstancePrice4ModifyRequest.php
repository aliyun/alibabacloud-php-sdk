<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class GetResult4QueryInstancePrice4ModifyRequest extends Model
{
    /**
     * @example 02S7UU41WKJL7ERR
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description This parameter is required.
     *
     * @example 58d5d8c5b5489150417a7cd6caa614bb
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResult4QueryInstancePrice4ModifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
