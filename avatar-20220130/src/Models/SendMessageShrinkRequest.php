<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class SendMessageShrinkRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $feedback;

    /**
     * @example 76898bd3b90b4a65b1c078d8824a2e9c
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $streamExtensionShrink;

    /**
     * @example 5615
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $textRequestShrink;

    /**
     * @var string
     */
    public $VAMLRequestShrink;
    protected $_name = [
        'feedback'              => 'Feedback',
        'sessionId'             => 'SessionId',
        'streamExtensionShrink' => 'StreamExtension',
        'tenantId'              => 'TenantId',
        'textRequestShrink'     => 'TextRequest',
        'VAMLRequestShrink'     => 'VAMLRequest',
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
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->streamExtensionShrink) {
            $res['StreamExtension'] = $this->streamExtensionShrink;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->textRequestShrink) {
            $res['TextRequest'] = $this->textRequestShrink;
        }
        if (null !== $this->VAMLRequestShrink) {
            $res['VAMLRequest'] = $this->VAMLRequestShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
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
        if (isset($map['TextRequest'])) {
            $model->textRequestShrink = $map['TextRequest'];
        }
        if (isset($map['VAMLRequest'])) {
            $model->VAMLRequestShrink = $map['VAMLRequest'];
        }

        return $model;
    }
}
