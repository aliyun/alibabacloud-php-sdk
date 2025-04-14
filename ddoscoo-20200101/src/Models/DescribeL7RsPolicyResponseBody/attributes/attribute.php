<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponseBody\attributes;

use AlibabaCloud\Dara\Model;

class attribute extends Model
{
    /**
     * @var int
     */
    public $connectTimeout;

    /**
     * @var int
     */
    public $failTimeout;

    /**
     * @var int
     */
    public $maxFails;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $readTimeout;

    /**
     * @var int
     */
    public $sendTimeout;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'connectTimeout' => 'ConnectTimeout',
        'failTimeout' => 'FailTimeout',
        'maxFails' => 'MaxFails',
        'mode' => 'Mode',
        'readTimeout' => 'ReadTimeout',
        'sendTimeout' => 'SendTimeout',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }

        if (null !== $this->failTimeout) {
            $res['FailTimeout'] = $this->failTimeout;
        }

        if (null !== $this->maxFails) {
            $res['MaxFails'] = $this->maxFails;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->readTimeout) {
            $res['ReadTimeout'] = $this->readTimeout;
        }

        if (null !== $this->sendTimeout) {
            $res['SendTimeout'] = $this->sendTimeout;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }

        if (isset($map['FailTimeout'])) {
            $model->failTimeout = $map['FailTimeout'];
        }

        if (isset($map['MaxFails'])) {
            $model->maxFails = $map['MaxFails'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['ReadTimeout'])) {
            $model->readTimeout = $map['ReadTimeout'];
        }

        if (isset($map['SendTimeout'])) {
            $model->sendTimeout = $map['SendTimeout'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
