<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string[]
     */
    public $sans;

    /**
     * @var bool
     */
    public $isUsing;

    /**
     * @var int
     */
    public $certificateId;
    protected $_name = [
        'certificateName' => 'CertificateName',
        'commonName'      => 'CommonName',
        'sans'            => 'Sans',
        'isUsing'         => 'IsUsing',
        'certificateId'   => 'CertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->isUsing) {
            $res['IsUsing'] = $this->isUsing;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
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
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['Sans'])) {
            if (!empty($map['Sans'])) {
                $model->sans = $map['Sans'];
            }
        }
        if (isset($map['IsUsing'])) {
            $model->isUsing = $map['IsUsing'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
