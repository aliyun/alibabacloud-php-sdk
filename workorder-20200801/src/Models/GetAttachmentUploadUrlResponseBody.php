<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200801\Models;

use AlibabaCloud\Dara\Model;

class GetAttachmentUploadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessFileUrl;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $putObjectUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessFileUrl' => 'AccessFileUrl',
        'objectKey' => 'ObjectKey',
        'putObjectUrl' => 'PutObjectUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessFileUrl) {
            $res['AccessFileUrl'] = $this->accessFileUrl;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->putObjectUrl) {
            $res['PutObjectUrl'] = $this->putObjectUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccessFileUrl'])) {
            $model->accessFileUrl = $map['AccessFileUrl'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['PutObjectUrl'])) {
            $model->putObjectUrl = $map['PutObjectUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
