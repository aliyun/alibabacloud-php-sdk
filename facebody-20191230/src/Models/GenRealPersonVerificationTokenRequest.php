<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GenRealPersonVerificationTokenRequest extends Model
{
    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificateNumber;

    /**
     * @var string
     */
    public $metaInfo;
    protected $_name = [
        'certificateName'   => 'CertificateName',
        'certificateNumber' => 'CertificateNumber',
        'metaInfo'          => 'MetaInfo',
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
        if (null !== $this->certificateNumber) {
            $res['CertificateNumber'] = $this->certificateNumber;
        }
        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenRealPersonVerificationTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CertificateNumber'])) {
            $model->certificateNumber = $map['CertificateNumber'];
        }
        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }

        return $model;
    }
}
