<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class UpdateVideoAnalysisTasksShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $taskIdsShrink;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'taskIdsShrink' => 'taskIds',
        'taskStatus' => 'taskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskIdsShrink) {
            $res['taskIds'] = $this->taskIdsShrink;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskIds'])) {
            $model->taskIdsShrink = $map['taskIds'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
