<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaceVerifyRequest extends Model
{
    /**
     * @example 91707dc296d469ad38e4c5efa6a0f24b
     *
     * @var string
     */
    public $certifyId;

    /**
     * @example JPG
     *
     * @var string
     */
    public $pictureReturnType;

    /**
     * @example 1000000006
     *
     * @var int
     */
    public $sceneId;
    protected $_name = [
        'certifyId'         => 'CertifyId',
        'pictureReturnType' => 'PictureReturnType',
        'sceneId'           => 'SceneId',
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
        if (null !== $this->pictureReturnType) {
            $res['PictureReturnType'] = $this->pictureReturnType;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['PictureReturnType'])) {
            $model->pictureReturnType = $map['PictureReturnType'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
