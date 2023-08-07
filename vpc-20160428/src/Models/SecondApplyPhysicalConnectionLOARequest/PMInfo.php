<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\SecondApplyPhysicalConnectionLOARequest;

use AlibabaCloud\Tea\Model;

class PMInfo extends Model
{
    /**
     * @example 5****************9
     *
     * @var string
     */
    public $PMCertificateNo;

    /**
     * @example IDCard
     *
     * @var string
     */
    public $PMCertificateType;

    /**
     * @example 1390000****
     *
     * @var string
     */
    public $PMContactInfo;

    /**
     * @example Male
     *
     * @var string
     */
    public $PMGender;

    /**
     * @var string
     */
    public $PMName;
    protected $_name = [
        'PMCertificateNo'   => 'PMCertificateNo',
        'PMCertificateType' => 'PMCertificateType',
        'PMContactInfo'     => 'PMContactInfo',
        'PMGender'          => 'PMGender',
        'PMName'            => 'PMName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->PMCertificateNo) {
            $res['PMCertificateNo'] = $this->PMCertificateNo;
        }
        if (null !== $this->PMCertificateType) {
            $res['PMCertificateType'] = $this->PMCertificateType;
        }
        if (null !== $this->PMContactInfo) {
            $res['PMContactInfo'] = $this->PMContactInfo;
        }
        if (null !== $this->PMGender) {
            $res['PMGender'] = $this->PMGender;
        }
        if (null !== $this->PMName) {
            $res['PMName'] = $this->PMName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PMInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PMCertificateNo'])) {
            $model->PMCertificateNo = $map['PMCertificateNo'];
        }
        if (isset($map['PMCertificateType'])) {
            $model->PMCertificateType = $map['PMCertificateType'];
        }
        if (isset($map['PMContactInfo'])) {
            $model->PMContactInfo = $map['PMContactInfo'];
        }
        if (isset($map['PMGender'])) {
            $model->PMGender = $map['PMGender'];
        }
        if (isset($map['PMName'])) {
            $model->PMName = $map['PMName'];
        }

        return $model;
    }
}
