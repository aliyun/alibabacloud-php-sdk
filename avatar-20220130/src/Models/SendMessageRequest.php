<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageRequest\textRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageRequest\VAMLRequest;
use AlibabaCloud\Tea\Model;

class SendMessageRequest extends Model
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
     * @example 5615
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var textRequest
     */
    public $textRequest;

    /**
     * @var VAMLRequest
     */
    public $VAMLRequest;
    protected $_name = [
        'feedback'    => 'Feedback',
        'sessionId'   => 'SessionId',
        'tenantId'    => 'TenantId',
        'textRequest' => 'TextRequest',
        'VAMLRequest' => 'VAMLRequest',
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->textRequest) {
            $res['TextRequest'] = null !== $this->textRequest ? $this->textRequest->toMap() : null;
        }
        if (null !== $this->VAMLRequest) {
            $res['VAMLRequest'] = null !== $this->VAMLRequest ? $this->VAMLRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageRequest
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TextRequest'])) {
            $model->textRequest = textRequest::fromMap($map['TextRequest']);
        }
        if (isset($map['VAMLRequest'])) {
            $model->VAMLRequest = VAMLRequest::fromMap($map['VAMLRequest']);
        }

        return $model;
    }
}
