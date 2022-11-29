<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class ServiceStatus extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $observedGeneration;

    /**
     * @var string
     */
    public $observedTime;

    /**
     * @var mixed[]
     */
    public $output;

    /**
     * @var string
     */
    public $phase;
    protected $_name = [
        'message'            => 'message',
        'observedGeneration' => 'observedGeneration',
        'observedTime'       => 'observedTime',
        'output'             => 'output',
        'phase'              => 'phase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->observedGeneration) {
            $res['observedGeneration'] = $this->observedGeneration;
        }
        if (null !== $this->observedTime) {
            $res['observedTime'] = $this->observedTime;
        }
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['observedGeneration'])) {
            $model->observedGeneration = $map['observedGeneration'];
        }
        if (isset($map['observedTime'])) {
            $model->observedTime = $map['observedTime'];
        }
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        return $model;
    }
}
