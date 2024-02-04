<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class FaceCompareRequest extends Model
{
    /**
     * @example e0c34a77f5ac40a5aa5e6ed20c353888
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $sourceFacePicture;

    /**
     * @example https://***face1.jpeg
     *
     * @var string
     */
    public $sourceFacePictureUrl;

    /**
     * @var string
     */
    public $targetFacePicture;

    /**
     * @example https://***face2.jpeg
     *
     * @var string
     */
    public $targetFacePictureUrl;
    protected $_name = [
        'merchantBizId'        => 'MerchantBizId',
        'sourceFacePicture'    => 'SourceFacePicture',
        'sourceFacePictureUrl' => 'SourceFacePictureUrl',
        'targetFacePicture'    => 'TargetFacePicture',
        'targetFacePictureUrl' => 'TargetFacePictureUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->sourceFacePicture) {
            $res['SourceFacePicture'] = $this->sourceFacePicture;
        }
        if (null !== $this->sourceFacePictureUrl) {
            $res['SourceFacePictureUrl'] = $this->sourceFacePictureUrl;
        }
        if (null !== $this->targetFacePicture) {
            $res['TargetFacePicture'] = $this->targetFacePicture;
        }
        if (null !== $this->targetFacePictureUrl) {
            $res['TargetFacePictureUrl'] = $this->targetFacePictureUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceCompareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['SourceFacePicture'])) {
            $model->sourceFacePicture = $map['SourceFacePicture'];
        }
        if (isset($map['SourceFacePictureUrl'])) {
            $model->sourceFacePictureUrl = $map['SourceFacePictureUrl'];
        }
        if (isset($map['TargetFacePicture'])) {
            $model->targetFacePicture = $map['TargetFacePicture'];
        }
        if (isset($map['TargetFacePictureUrl'])) {
            $model->targetFacePictureUrl = $map['TargetFacePictureUrl'];
        }

        return $model;
    }
}
