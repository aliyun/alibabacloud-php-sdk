<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class caCertificates extends Model
{
    /**
     * @description The ID of the default CA certificate.
     *
     * @example 139a00604bd-cn-east-hangzho****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description Indicates whether the certificate is a default certificate: Valid values:
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
     * @example Associated
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'isDefault'     => 'IsDefault',
        'status'        => 'Status',
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
     * @return caCertificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
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
