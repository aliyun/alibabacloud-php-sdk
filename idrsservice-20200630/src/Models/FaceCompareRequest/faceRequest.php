<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceCompareRequest;

use AlibabaCloud\Tea\Model;

class faceRequest extends Model
{
    /**
     * @example d61be709-49d2-4cf1-b219-cd6181f72***
     *
     * @var string
     */
    public $appId;

    /**
     * @example /9j/4AAQSkZJRgABAQAASxxxxxxx
     *
     * @var string
     */
    public $sourceImage;

    /**
     * @example /9j/4AAQSkZJRgABAQAASxxxxxxx
     *
     * @var string
     */
    public $targetImage;
    protected $_name = [
        'appId'       => 'AppId',
        'sourceImage' => 'SourceImage',
        'targetImage' => 'TargetImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->sourceImage) {
            $res['SourceImage'] = $this->sourceImage;
        }
        if (null !== $this->targetImage) {
            $res['TargetImage'] = $this->targetImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SourceImage'])) {
            $model->sourceImage = $map['SourceImage'];
        }
        if (isset($map['TargetImage'])) {
            $model->targetImage = $map['TargetImage'];
        }

        return $model;
    }
}
