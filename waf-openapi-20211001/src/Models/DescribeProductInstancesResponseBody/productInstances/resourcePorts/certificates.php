<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances\resourcePorts;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example 10106183
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The name of the certificate.
     *
     * @example trafficxxxx.cn
     *
     * @var string
     */
    public $certificateName;
    protected $_name = [
        'certificateId'   => 'CertificateId',
        'certificateName' => 'CertificateName',
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
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
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
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        return $model;
    }
}
