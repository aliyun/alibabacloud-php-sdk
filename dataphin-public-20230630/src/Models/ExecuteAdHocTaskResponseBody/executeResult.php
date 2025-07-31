<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteAdHocTaskResponseBody;

use AlibabaCloud\Tea\Model;

class executeResult extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $subTaskCount;

    /**
     * @example MaxCompute_SQL_300000843_1611548758327
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'subTaskCount' => 'SubTaskCount',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subTaskCount) {
            $res['SubTaskCount'] = $this->subTaskCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubTaskCount'])) {
            $model->subTaskCount = $map['SubTaskCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
