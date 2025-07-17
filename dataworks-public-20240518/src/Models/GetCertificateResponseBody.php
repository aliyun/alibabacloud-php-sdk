<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCertificateResponseBody\certificate;
use AlibabaCloud\Tea\Model;

class GetCertificateResponseBody extends Model
{
    /**
     * @description The details of the certificate file.
     *
     * @var certificate
     */
    public $certificate;

    /**
     * @description The request ID.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificate' => 'Certificate',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = null !== $this->certificate ? $this->certificate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificate'])) {
            $model->certificate = certificate::fromMap($map['Certificate']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
