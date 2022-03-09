<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetBimStandardPlanRequest extends Model
{
    /**
     * @description 标准图纸id
     *
     * @var int
     */
    public $standard;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'standard' => 'Standard',
        'taskId'   => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->standard) {
            $res['Standard'] = $this->standard;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBimStandardPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Standard'])) {
            $model->standard = $map['Standard'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
