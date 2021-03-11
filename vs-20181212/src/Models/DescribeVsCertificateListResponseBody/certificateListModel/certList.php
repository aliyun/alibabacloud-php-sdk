<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListResponseBody\certificateListModel;

use AlibabaCloud\Tea\Model;

class certList extends Model
{
    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $common;
    protected $_name = [
        'lastTime'    => 'LastTime',
        'fingerprint' => 'Fingerprint',
        'certName'    => 'CertName',
        'issuer'      => 'Issuer',
        'certId'      => 'CertId',
        'common'      => 'Common',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
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
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }

        return $model;
    }
}
