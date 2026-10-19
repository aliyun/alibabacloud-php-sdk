<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ResolveWorkItemAttachmentAccessResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessUrl;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessUrl' => 'accessUrl',
        'code' => 'code',
        'expiresAt' => 'expiresAt',
        'message' => 'message',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessUrl) {
            $res['accessUrl'] = $this->accessUrl;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['accessUrl'])) {
            $model->accessUrl = $map['accessUrl'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
