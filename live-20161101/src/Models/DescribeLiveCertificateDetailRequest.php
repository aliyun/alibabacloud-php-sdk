<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveCertificateDetailRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $certName;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'certName'      => 'CertName',
    ];

    public function validate()
    {
        Model::validateRequired('certName', $this->certName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveCertificateDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        return $model;
    }
}
