<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAdditionalCertificatesFromListenerRequest;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @description The certificate ID. Only server certificates are supported. A maximum of 20 certificate IDs are supported.
     *
     * This parameter is required.
     * @example 12315790343_166f8204689_1714763408_70998****
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
     * @return certificates
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
