<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class DeleteFaceRecordV2Request extends Model
{
    /**
     * @var string
     */
    public $faceGroupCode;

    /**
     * @var string
     */
    public $merchantUserId;
    protected $_name = [
        'faceGroupCode' => 'FaceGroupCode',
        'merchantUserId' => 'MerchantUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceGroupCode) {
            $res['FaceGroupCode'] = $this->faceGroupCode;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
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
        if (isset($map['FaceGroupCode'])) {
            $model->faceGroupCode = $map['FaceGroupCode'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        return $model;
    }
}
