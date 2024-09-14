<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigClusterCertificateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example -----BEGIN CERTIFICATE-----
     * BAgMAnpqMQswCQYDVQQHDAJoejEWMBQGA1UECgwNQWxpYmFiYSBDbG91ZDEUMBIG
     * A1UECwwLU2VjQ2xvdWRIc20wHhcNMjQwNzAzM****-----END CERTIFICATE-----
     * @var string
     */
    public $clusterCertificate;

    /**
     * @description This parameter is required.
     *
     * @example cluster-BqxX63Bsg****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example -----BEGIN CERTIFICATE-----
     * BAYTAmNuMQswCQYDVQQIDAJ6ajELMAkGA1UEBwwCaHoxFjAUBgNVBAoMDUFsaWJh
     * YmEgQ2xvdWQxFDA****
     * -----END CERTIFICATE-----
     * @var string
     */
    public $issuerCertificate;
    protected $_name = [
        'clusterCertificate' => 'ClusterCertificate',
        'clusterId'          => 'ClusterId',
        'issuerCertificate'  => 'IssuerCertificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCertificate) {
            $res['ClusterCertificate'] = $this->clusterCertificate;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->issuerCertificate) {
            $res['IssuerCertificate'] = $this->issuerCertificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigClusterCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterCertificate'])) {
            $model->clusterCertificate = $map['ClusterCertificate'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IssuerCertificate'])) {
            $model->issuerCertificate = $map['IssuerCertificate'];
        }

        return $model;
    }
}
