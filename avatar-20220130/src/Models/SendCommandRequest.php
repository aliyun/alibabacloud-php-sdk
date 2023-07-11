<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class SendCommandRequest extends Model
{
    /**
     * @example INTERRUPT
     *
     * @var string
     */
    public $code;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $content;

    /**
     * @example false
     *
     * @var bool
     */
    public $feedback;

    /**
     * @example 5615
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 76898bd3b90b4a65b1c078d8824a2e9c
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example 0000001000586737
     *
     * @var string
     */
    public $uniqueCode;
    protected $_name = [
        'code'       => 'Code',
        'content'    => 'Content',
        'feedback'   => 'Feedback',
        'sessionId'  => 'SessionId',
        'tenantId'   => 'TenantId',
        'uniqueCode' => 'UniqueCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->uniqueCode) {
            $res['UniqueCode'] = $this->uniqueCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UniqueCode'])) {
            $model->uniqueCode = $map['UniqueCode'];
        }

        return $model;
    }
}
