<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class AddExternalSAMLIdPCertificateRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The X.509 certificate in the PEM format.
     *
     * The certificate is provided by the SAML IdP.
     * @example MIIC8DCCAdigAwIBAgIQP9eomUYGeoND****
     *
     * @var string
     */
    public $x509Certificate;
    protected $_name = [
        'directoryId'     => 'DirectoryId',
        'x509Certificate' => 'X509Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->x509Certificate) {
            $res['X509Certificate'] = $this->x509Certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddExternalSAMLIdPCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['X509Certificate'])) {
            $model->x509Certificate = $map['X509Certificate'];
        }

        return $model;
    }
}
