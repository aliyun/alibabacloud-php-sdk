<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;

class stages extends Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $message;
    /**
     * @var mixed[]
     */
    public $outputs;
    /**
     * @var string
     */
    public $startTime;
    /**
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
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['outputs'] = [];
                foreach ($this->outputs as $key1 => $value1) {
                    $res['outputs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                foreach ($map['outputs'] as $key1 => $value1) {
                    $model->outputs[$key1] = $value1;
                }
            }
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
