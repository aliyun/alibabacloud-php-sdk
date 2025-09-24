<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class ModifyFaceRecordRequest extends Model
{
    /**
     * @var string
     */
    public $faceGroupCode;

    /**
     * @var string
     */
    public $imgOssInfos;
    protected $_name = [
        'faceGroupCode' => 'FaceGroupCode',
        'imgOssInfos' => 'ImgOssInfos',
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

        if (null !== $this->imgOssInfos) {
            $res['ImgOssInfos'] = $this->imgOssInfos;
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

        if (isset($map['ImgOssInfos'])) {
            $model->imgOssInfos = $map['ImgOssInfos'];
        }

        return $model;
    }
}
