<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateCertificateStatusRequest extends Model
{
    /**
     * @description The ID of the certificate. The ID must be globally unique in Certificates Manager.
     *
     * This parameter is required.
     * @example 9a28de48-8d8b-484d-a766-dec4****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The status of the certificate. Valid values:
     *
     *   INACTIVE: The certificate is disabled.
     *
     *   ACTIVE: The certificate is enabled.
     *
     *   REVOKED: The certificate is revoked.
     *
     * This parameter is required.
     * @example INACTIVE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certificateId' => 'CertificateId',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCertificateStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
