<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances\resourcePorts;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @var string
     */
    public $appliedType;

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

    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'appliedType' => 'AppliedType',
        'certificateId' => 'CertificateId',
        'certificateName' => 'CertificateName',
        'domain' => 'Domain',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedType) {
            $res['AppliedType'] = $this->appliedType;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['AppliedType'])) {
            $model->appliedType = $map['AppliedType'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
