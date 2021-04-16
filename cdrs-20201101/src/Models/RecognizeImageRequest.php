<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class RecognizeImageRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $imageContent;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $recognizeType;

    /**
     * @var bool
     */
    public $requireCropImage;
    protected $_name = [
        'corpId'           => 'CorpId',
        'vendor'           => 'Vendor',
        'imageContent'     => 'ImageContent',
        'imageUrl'         => 'ImageUrl',
        'recognizeType'    => 'RecognizeType',
        'requireCropImage' => 'RequireCropImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->imageContent) {
            $res['ImageContent'] = $this->imageContent;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->recognizeType) {
            $res['RecognizeType'] = $this->recognizeType;
        }
        if (null !== $this->requireCropImage) {
            $res['RequireCropImage'] = $this->requireCropImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['ImageContent'])) {
            $model->imageContent = $map['ImageContent'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['RecognizeType'])) {
            $model->recognizeType = $map['RecognizeType'];
        }
        if (isset($map['RequireCropImage'])) {
            $model->requireCropImage = $map['RequireCropImage'];
        }

        return $model;
    }
}
