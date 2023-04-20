<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class AttachWebHostingCertificateRequest extends Model
{
    /**
     * @example testCert
     *
     * @var string
     */
    public $certName;

    /**
     * @example upload
     *
     * @var string
     */
    public $certType;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example -----BEGIN RSA PRIVATE KEY----- ...... -----END RSA PRIVATE KEY-----
     *
     * @var string
     */
    public $privateKey;

    /**
     * @example -----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----
     *
     * @var string
     */
    public $serverCertificate;

    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'certName'          => 'CertName',
        'certType'          => 'CertType',
        'domain'            => 'Domain',
        'privateKey'        => 'PrivateKey',
        'serverCertificate' => 'ServerCertificate',
        'spaceId'           => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->serverCertificate) {
            $res['ServerCertificate'] = $this->serverCertificate;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachWebHostingCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['ServerCertificate'])) {
            $model->serverCertificate = $map['ServerCertificate'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
