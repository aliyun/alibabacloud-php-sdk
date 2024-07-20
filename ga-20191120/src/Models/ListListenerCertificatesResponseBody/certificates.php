<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListListenerCertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @description The certificate ID.
     *
     * @example 6092**-cn-hangzhou
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The domain name associated with the additional certificate.
     *
     * This parameter is not returned if the certificate is a default one.
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Indicates whether the certificate is a default one.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The status of the certificate.
     *
     *   **active**: The certificate is associated with a listener and in effect.
     *   **updating**: The additional certificate is being replaced.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'domain'        => 'Domain',
        'isDefault'     => 'IsDefault',
        'state'         => 'State',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
