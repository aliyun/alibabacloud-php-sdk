<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateSignatureResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signatureId;

    /**
     * @var string
     */
    public $signatureName;
    protected $_name = [
        'requestId'     => 'RequestId',
        'signatureId'   => 'SignatureId',
        'signatureName' => 'SignatureName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSignatureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }

        return $model;
    }
}
