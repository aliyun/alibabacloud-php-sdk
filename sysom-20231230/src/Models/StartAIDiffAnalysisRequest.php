<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIDiffAnalysisRequest\task1;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIDiffAnalysisRequest\task2;
use AlibabaCloud\Tea\Model;

class StartAIDiffAnalysisRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var task1
     */
    public $task1;

    /**
     * @description This parameter is required.
     *
     * @var task2
     */
    public $task2;
    protected $_name = [
        'task1' => 'task1',
        'task2' => 'task2',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->task1) {
            $res['task1'] = null !== $this->task1 ? $this->task1->toMap() : null;
        }
        if (null !== $this->task2) {
            $res['task2'] = null !== $this->task2 ? $this->task2->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartAIDiffAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['task1'])) {
            $model->task1 = task1::fromMap($map['task1']);
        }
        if (isset($map['task2'])) {
            $model->task2 = task2::fromMap($map['task2']);
        }

        return $model;
    }
}
