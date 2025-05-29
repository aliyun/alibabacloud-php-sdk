<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListResponseBody\certificateListModel;

use AlibabaCloud\Dara\Model;

class certList extends Model
{
    /**
     * @var int
     */
    public $certId;

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
    public $fingerprint;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var int
     */
    public $lastTime;
    protected $_name = [
        'certId' => 'CertId',
        'certName' => 'CertName',
        'common' => 'Common',
        'fingerprint' => 'Fingerprint',
        'issuer' => 'Issuer',
        'lastTime' => 'LastTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }

        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
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
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }

        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        return $model;
    }
}
