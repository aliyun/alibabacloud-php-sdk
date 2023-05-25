<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifySignatureResponseBody extends Model
{
    /**
     * @description The name of the key.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;

    /**
     * @description *   This API is intended for API providers.
     *   This API operation modifies the name, Key value, and Secret value of an existing signature key.
     *   Note that the modification takes effect immediately. If the key has been bound to an API, you must adjust the backend signature verification based on the new key accordingly.
     *   The QPS limit on this operation is 50 per user.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description Modifies a backend signature key.
     *
     * @example backendsignature
     *
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
     * @return ModifySignatureResponseBody
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
