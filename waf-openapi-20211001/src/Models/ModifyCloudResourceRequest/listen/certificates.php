<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceRequest\listen;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @description The type of the HTTPS certificate. Valid values:
     *
     *   **default**: default certificate.
     *   **extension**: additional certificate.
     *
     * @example default
     *
     * @var string
     */
    public $appliedType;

    /**
     * @description The ID of the certificate.
     *
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'appliedType'   => 'AppliedType',
        'certificateId' => 'CertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedType) {
            $res['AppliedType'] = $this->appliedType;
        }
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
        if (isset($map['AppliedType'])) {
            $model->appliedType = $map['AppliedType'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
