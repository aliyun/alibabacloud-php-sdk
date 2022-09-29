<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectVideoFrameRequest extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $featureConfig;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $streamArn;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'featureConfig' => 'FeatureConfig',
        'features'      => 'Features',
        'height'        => 'Height',
        'imageURL'      => 'ImageURL',
        'ownerId'       => 'OwnerId',
        'streamArn'     => 'StreamArn',
        'width'         => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->featureConfig) {
            $res['FeatureConfig'] = $this->featureConfig;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->streamArn) {
            $res['StreamArn'] = $this->streamArn;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVideoFrameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FeatureConfig'])) {
            $model->featureConfig = $map['FeatureConfig'];
        }
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = $map['Features'];
            }
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StreamArn'])) {
            $model->streamArn = $map['StreamArn'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
