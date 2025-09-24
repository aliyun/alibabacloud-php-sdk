<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\QueryFaceRecordResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $faceId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $imgOssUrl;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @var string
     */
    public $registrationType;
    protected $_name = [
        'faceId' => 'FaceId',
        'gmtCreate' => 'GmtCreate',
        'id' => 'Id',
        'imgOssUrl' => 'ImgOssUrl',
        'merchantUserId' => 'MerchantUserId',
        'registrationType' => 'RegistrationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imgOssUrl) {
            $res['ImgOssUrl'] = $this->imgOssUrl;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }

        if (null !== $this->registrationType) {
            $res['RegistrationType'] = $this->registrationType;
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
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImgOssUrl'])) {
            $model->imgOssUrl = $map['ImgOssUrl'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        if (isset($map['RegistrationType'])) {
            $model->registrationType = $map['RegistrationType'];
        }

        return $model;
    }
}
