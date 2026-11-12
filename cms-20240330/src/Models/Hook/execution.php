<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\Hook;

use AlibabaCloud\Dara\Model;

class execution extends Model
{
    /**
     * @var string
     */
    public $failResult;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var int
     */
    public $maxRetry;

    /**
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'failResult' => 'failResult',
        'instruction' => 'instruction',
        'maxRetry' => 'maxRetry',
        'timeoutSeconds' => 'timeoutSeconds',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failResult) {
            $res['failResult'] = $this->failResult;
        }

        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }

        if (null !== $this->maxRetry) {
            $res['maxRetry'] = $this->maxRetry;
        }

        if (null !== $this->timeoutSeconds) {
            $res['timeoutSeconds'] = $this->timeoutSeconds;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['failResult'])) {
            $model->failResult = $map['failResult'];
        }

        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }

        if (isset($map['maxRetry'])) {
            $model->maxRetry = $map['maxRetry'];
        }

        if (isset($map['timeoutSeconds'])) {
            $model->timeoutSeconds = $map['timeoutSeconds'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
