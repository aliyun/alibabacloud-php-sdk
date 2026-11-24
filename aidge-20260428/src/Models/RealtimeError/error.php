<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\RealtimeError;

use AlibabaCloud\Dara\Model;

class error extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $param;

    /**
     * @var bool
     */
    public $fatal;

    /**
     * @var bool
     */
    public $retryable;

    /**
     * @var string
     */
    public $causedBy;
    protected $_name = [
        'type' => 'type',
        'code' => 'code',
        'message' => 'message',
        'param' => 'param',
        'fatal' => 'fatal',
        'retryable' => 'retryable',
        'causedBy' => 'caused_by',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->param) {
            $res['param'] = $this->param;
        }

        if (null !== $this->fatal) {
            $res['fatal'] = $this->fatal;
        }

        if (null !== $this->retryable) {
            $res['retryable'] = $this->retryable;
        }

        if (null !== $this->causedBy) {
            $res['caused_by'] = $this->causedBy;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['param'])) {
            $model->param = $map['param'];
        }

        if (isset($map['fatal'])) {
            $model->fatal = $map['fatal'];
        }

        if (isset($map['retryable'])) {
            $model->retryable = $map['retryable'];
        }

        if (isset($map['caused_by'])) {
            $model->causedBy = $map['caused_by'];
        }

        return $model;
    }
}
