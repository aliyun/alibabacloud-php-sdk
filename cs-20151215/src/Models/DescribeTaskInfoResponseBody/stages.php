<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class stages extends Model
{
    /**
     * @description The end time of the stage.
     *
     * @example 2022-12-15 23:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The message about the stage.
     *
     * @example success to xxxxx
     *
     * @var string
     */
    public $message;

    /**
     * @description The output generated at the stage.
     *
     * @var mixed[]
     */
    public $outputs;

    /**
     * @description The start time of the stage.
     *
     * @example 2022-12-15 23:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the stage.
     *
     * @example running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'endTime'   => 'end_time',
        'message'   => 'message',
        'outputs'   => 'outputs',
        'startTime' => 'start_time',
        'state'     => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
