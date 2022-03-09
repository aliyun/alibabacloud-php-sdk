<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetBimStandardSampleRequest extends Model
{
    /**
     * @description 标准图纸id
     *
     * @var int
     */
    public $standardId;

    /**
     * @description 任务id
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'standardId' => 'StandardId',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBimStandardSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
