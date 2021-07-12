<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeVsCertificateDetailRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $certName;
    protected $_name = [
        'ownerId'  => 'OwnerId',
        'certName' => 'CertName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsCertificateDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        return $model;
    }
}
