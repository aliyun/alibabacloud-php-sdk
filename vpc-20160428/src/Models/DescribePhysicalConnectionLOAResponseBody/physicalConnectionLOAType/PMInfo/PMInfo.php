<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody\physicalConnectionLOAType\PMInfo;

use AlibabaCloud\Tea\Model;

class PMInfo extends Model
{
    /**
     * @var string
     */
    public $PMCertificateNo;

    /**
     * @var string
     */
    public $PMName;

    /**
     * @var string
     */
    public $PMCertificateType;

    /**
     * @var string
     */
    public $PMGender;

    /**
     * @var string
     */
    public $PMContactInfo;
    protected $_name = [
        'PMCertificateNo'   => 'PMCertificateNo',
        'PMName'            => 'PMName',
        'PMCertificateType' => 'PMCertificateType',
        'PMGender'          => 'PMGender',
        'PMContactInfo'     => 'PMContactInfo',
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
        if (null !== $this->PMName) {
            $res['PMName'] = $this->PMName;
        }
        if (null !== $this->PMCertificateType) {
            $res['PMCertificateType'] = $this->PMCertificateType;
        }
        if (null !== $this->PMGender) {
            $res['PMGender'] = $this->PMGender;
        }
        if (null !== $this->PMContactInfo) {
            $res['PMContactInfo'] = $this->PMContactInfo;
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
        if (isset($map['PMName'])) {
            $model->PMName = $map['PMName'];
        }
        if (isset($map['PMCertificateType'])) {
            $model->PMCertificateType = $map['PMCertificateType'];
        }
        if (isset($map['PMGender'])) {
            $model->PMGender = $map['PMGender'];
        }
        if (isset($map['PMContactInfo'])) {
            $model->PMContactInfo = $map['PMContactInfo'];
        }

        return $model;
    }
}
