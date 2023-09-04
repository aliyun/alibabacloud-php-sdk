<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class AddExternalSAMLIdPCertificateResponseBody extends Model
{
    /**
     * @description The ID of the SAML signing certificate.
     *
     * @example idp-c-00wk2fb4foracls0****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The ID of the request.
     *
     * @example 12B3E332-DD16-515B-B695-39BA233AA172
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddExternalSAMLIdPCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
