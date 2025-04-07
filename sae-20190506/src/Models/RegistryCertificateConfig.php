<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class RegistryCertificateConfig extends Model
{
    /**
     * @example LS0tLS1CRUdJTiBDRVJUSUZJQ0FURS0tLS0tCmZha2VDZXJ0aWZpY2F0ZQotLS0tLUVORCBDRVJUSUZJQ0FURS0tLS0t
     *
     * @var string
     */
    public $certBase64;

    /**
     * @example true
     *
     * @var bool
     */
    public $insecure;
    protected $_name = [
        'certBase64' => 'CertBase64',
        'insecure' => 'Insecure',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certBase64) {
            $res['CertBase64'] = $this->certBase64;
        }
        if (null !== $this->insecure) {
            $res['Insecure'] = $this->insecure;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegistryCertificateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertBase64'])) {
            $model->certBase64 = $map['CertBase64'];
        }
        if (isset($map['Insecure'])) {
            $model->insecure = $map['Insecure'];
        }

        return $model;
    }
}
