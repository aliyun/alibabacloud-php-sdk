<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListListenerCertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @description The certificate ID. Only server certificates are supported.
     *
     * @example 12315790343_166f8204689_1714763408_70998****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The type of the certificate.
     *
     * @example Server
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description Indicates whether the certificate is the default certificate of the listener. Valid values:
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
     * @description Indicates whether the certificate is associated with the listener. Valid values:
     *
     *   **Associating**
     *   **Associated**
     *   **Diassociating**
     *
     * @example Associating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certificateId'   => 'CertificateId',
        'certificateType' => 'CertificateType',
        'isDefault'       => 'IsDefault',
        'status'          => 'Status',
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
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
