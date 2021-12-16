<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListResponseBody\certificateListModel;

use AlibabaCloud\Tea\Model;

class certList extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $common;

    /**
     * @var string
     */
    public $issuer;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'certName'       => 'CertName',
        'common'         => 'Common',
        'issuer'         => 'Issuer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        return $model;
    }
}
