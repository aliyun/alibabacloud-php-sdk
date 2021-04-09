<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaceVerifyRequest extends Model
{
    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $pictureReturnType;
    protected $_name = [
        'sceneId'           => 'SceneId',
        'certifyId'         => 'CertifyId',
        'pictureReturnType' => 'PictureReturnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->pictureReturnType) {
            $res['PictureReturnType'] = $this->pictureReturnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaceVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['PictureReturnType'])) {
            $model->pictureReturnType = $map['PictureReturnType'];
        }

        return $model;
    }
}
