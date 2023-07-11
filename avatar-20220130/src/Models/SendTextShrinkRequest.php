<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class SendTextShrinkRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $feedback;

    /**
     * @example true
     *
     * @var bool
     */
    public $interrupt;

    /**
     * @example 5615
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $streamExtensionShrink;

    /**
     * @example 76898bd3b90b4a65b1c078d8824a2e9c
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $text;

    /**
     * @example 0000001000586737
     *
     * @var string
     */
    public $uniqueCode;
    protected $_name = [
        'feedback'              => 'Feedback',
        'interrupt'             => 'Interrupt',
        'sessionId'             => 'SessionId',
        'streamExtensionShrink' => 'StreamExtension',
        'tenantId'              => 'TenantId',
        'text'                  => 'Text',
        'uniqueCode'            => 'UniqueCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->interrupt) {
            $res['Interrupt'] = $this->interrupt;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->streamExtensionShrink) {
            $res['StreamExtension'] = $this->streamExtensionShrink;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->uniqueCode) {
            $res['UniqueCode'] = $this->uniqueCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendTextShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['Interrupt'])) {
            $model->interrupt = $map['Interrupt'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['StreamExtension'])) {
            $model->streamExtensionShrink = $map['StreamExtension'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['UniqueCode'])) {
            $model->uniqueCode = $map['UniqueCode'];
        }

        return $model;
    }
}
