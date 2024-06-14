<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetCertificateRequest extends Model
{
    /**
     * @description The ID of the certificate. It is the globally unique identifier (GUID) of the certificate in Certificates Manager.
     *
     * This parameter is required.
     * @example 9a28de48-8d8b-484d-a766-dec4****
     *
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'certificateId' => 'CertificateId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
