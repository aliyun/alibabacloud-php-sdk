<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;

class ConfigClusterCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $clusterCertificate;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $issuerCertificate;
    protected $_name = [
        'clusterCertificate' => 'ClusterCertificate',
        'clusterId' => 'ClusterId',
        'issuerCertificate' => 'IssuerCertificate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
