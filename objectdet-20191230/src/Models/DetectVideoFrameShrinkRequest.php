<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectVideoFrameShrinkRequest extends Model
{
    /**
     * @description 图片创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description AI每个功能具体配置描述，每个AI算法配置都不一样
     *
     * @var string
     */
    public $featureConfig;

    /**
     * @description AI功能名称列表
     *
     * @var string
     */
    public $featuresShrink;

    /**
     * @description 图像高度
     *
     * @var int
     */
    public $height;

    /**
     * @description 图片URL地址
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description 自用拥有者pk
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description 流资源唯一描述
     *
     * @var string
     */
    public $streamArn;

    /**
     * @description 图像宽度
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'featureConfig'  => 'FeatureConfig',
        'featuresShrink' => 'Features',
        'height'         => 'Height',
        'imageURL'       => 'ImageURL',
        'ownerId'        => 'OwnerId',
        'streamArn'      => 'StreamArn',
        'width'          => 'Width',
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
        if (null !== $this->featuresShrink) {
            $res['Features'] = $this->featuresShrink;
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
     * @return DetectVideoFrameShrinkRequest
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
            $model->featuresShrink = $map['Features'];
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
