<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeScheduledTasksResponseBody\tasks;

use AlibabaCloud\Dara\Model;

class runConfig extends Model
{
    /**
     * @var string
     */
    public $extraParams;

    /**
     * @var int
     */
    public $maxSteps;

    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'extraParams' => 'ExtraParams',
        'maxSteps' => 'MaxSteps',
        'timeoutSeconds' => 'TimeoutSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }

        if (null !== $this->maxSteps) {
            $res['MaxSteps'] = $this->maxSteps;
        }

        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
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
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }

        if (isset($map['MaxSteps'])) {
            $model->maxSteps = $map['MaxSteps'];
        }

        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
