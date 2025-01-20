<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $certifyId;
    /**
     * @var string
     */
    public $certifyUrl;
    protected $_name = [
        'certifyId'  => 'CertifyId',
        'certifyUrl' => 'CertifyUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }

        if (null !== $this->certifyUrl) {
            $res['CertifyUrl'] = $this->certifyUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        if (isset($map['CertifyUrl'])) {
            $model->certifyUrl = $map['CertifyUrl'];
        }

        return $model;
    }
}
