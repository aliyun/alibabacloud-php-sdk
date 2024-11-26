<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\SDK\Qianzhou\V20211111\Models\AICreateSessionMessageRequest\context;
use AlibabaCloud\Tea\Model;

class AICreateSessionMessageRequest extends Model
{
    /**
     * @var context
     */
    public $context;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @example QA / K8S_DIAGNOSE
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $employeeId;
    protected $_name = [
        'context'    => 'context',
        'language'   => 'language',
        'message'    => 'message',
        'sessionId'  => 'session_id',
        'type'       => 'type',
        'employeeId' => 'employee_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toMap() : null;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->employeeId) {
            $res['employee_id'] = $this->employeeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AICreateSessionMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['context'])) {
            $model->context = context::fromMap($map['context']);
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['employee_id'])) {
            $model->employeeId = $map['employee_id'];
        }

        return $model;
    }
}
