<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\shardingProgress;

use AlibabaCloud\Tea\Model;

class statusType extends Model
{
    /**
     * @example 5
     *
     * @var string
     */
    public $code;

    /**
     * @example TaskStatus.FAILED
     *
     * @var string
     */
    public $name;

    /**
     * @description -
     *
     * @var string[]
     */
    public $tips;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'tips' => 'Tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
