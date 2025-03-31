<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsActionLogsResponseBody;

use AlibabaCloud\Dara\Model;

class actionLogs extends Model
{
    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'context' => 'Context',
        'stage' => 'Stage',
        'state' => 'State',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
