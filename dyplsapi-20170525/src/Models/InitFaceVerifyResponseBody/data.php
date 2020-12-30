<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\InitFaceVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $certifyId;
    protected $_name = [
        'certifyId' => 'CertifyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        return $model;
    }
}
