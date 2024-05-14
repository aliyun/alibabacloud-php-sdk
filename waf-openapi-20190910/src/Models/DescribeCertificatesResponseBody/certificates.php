<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @example 2329260
     *
     * @var int
     */
    public $certificateId;

    /**
     * @example *.aliyundoc.com
     *
     * @var string
     */
    public $certificateName;

    /**
     * @example *.aliyundoc.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $isUsing;

    /**
     * @var string[]
     */
    public $sans;
    protected $_name = [
        'certificateId'   => 'CertificateId',
        'certificateName' => 'CertificateName',
        'commonName'      => 'CommonName',
        'endTime'         => 'EndTime',
        'isUsing'         => 'IsUsing',
        'sans'            => 'Sans',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isUsing) {
            $res['IsUsing'] = $this->isUsing;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsUsing'])) {
            $model->isUsing = $map['IsUsing'];
        }
        if (isset($map['Sans'])) {
            if (!empty($map['Sans'])) {
                $model->sans = $map['Sans'];
            }
        }

        return $model;
    }
}
