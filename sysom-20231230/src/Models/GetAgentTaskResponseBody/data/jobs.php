<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class jobs extends Model
{
    /**
     * @var string
     */
    public $error;
    /**
     * @var string
     */
    public $instance;
    /**
     * @var mixed
     */
    public $params;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $result;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'error'    => 'error',
        'instance' => 'instance',
        'params'   => 'params',
        'region'   => 'region',
        'result'   => 'result',
        'status'   => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['error'] = $this->error;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['error'])) {
            $model->error = $map['error'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
