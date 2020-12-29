<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserCertificateDetailRequest extends Model
{
    /**
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'certId'   => 'CertId',
        'sourceIp' => 'SourceIp',
        'lang'     => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserCertificateDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
