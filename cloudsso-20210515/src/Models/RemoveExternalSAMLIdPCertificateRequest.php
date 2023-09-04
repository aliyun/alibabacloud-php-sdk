<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class RemoveExternalSAMLIdPCertificateRequest extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * You can call the [ListExternalSAMLIdPCertificates](~~341629~~) operation to query the IDs of certificates.
     * @example idp-c-00dt9gnl7fmjaw9c****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'directoryId'   => 'DirectoryId',
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
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveExternalSAMLIdPCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        return $model;
    }
}
