<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CertConfig extends Model
{
    /**
     * @description 证书名称
     *
     * @var string
     */
    public $certName;

    /**
     * @description 证书，如果是证书链则依次填写多个证书
     *
     * @var string
     */
    public $certificate;

    /**
     * @description 私钥
     *
     * @var string
     */
    public $privateKey;
    protected $_name = [
        'certName'    => 'certName',
        'certificate' => 'certificate',
        'privateKey'  => 'privateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['certName'] = $this->certName;
        }
        if (null !== $this->certificate) {
            $res['certificate'] = $this->certificate;
        }
        if (null !== $this->privateKey) {
            $res['privateKey'] = $this->privateKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['certName'])) {
            $model->certName = $map['certName'];
        }
        if (isset($map['certificate'])) {
            $model->certificate = $map['certificate'];
        }
        if (isset($map['privateKey'])) {
            $model->privateKey = $map['privateKey'];
        }

        return $model;
    }
}
