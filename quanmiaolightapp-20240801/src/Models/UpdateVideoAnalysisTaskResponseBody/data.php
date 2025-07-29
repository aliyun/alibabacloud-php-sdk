<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\UpdateVideoAnalysisTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @example 3feb69ed02d9b1a17d0f1a942675d300
     *
     * @var string
     */
    public $taskId;

    /**
     * @example CANCELED
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'taskErrorMessage' => 'taskErrorMessage',
        'taskId' => 'taskId',
        'taskStatus' => 'taskStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskErrorMessage) {
            $res['taskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
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
        if (isset($map['taskErrorMessage'])) {
            $model->taskErrorMessage = $map['taskErrorMessage'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
