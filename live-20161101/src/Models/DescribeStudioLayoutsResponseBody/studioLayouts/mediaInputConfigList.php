<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\Tea\Model;

class mediaInputConfigList extends Model
{
    /**
     * @description The ID of the channel that is bound to the video resource.
     *
     * @example RV01
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The fill type. Default value: none.
     *
     * @example none
     *
     * @var string
     */
    public $fillMode;

    /**
     * @description The normalized value of the material height. The value indicates the ratio of the material height to the height of the background. Valid values: **0 to 1**.
     *
     * @example 0.4
     *
     * @var float
     */
    public $heightNormalized;

    /**
     * @description The unique ID of the multimedia material.
     *
     * @example k12kj31****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the image in ApsaraVideo VOD.
     *
     * @example lkajsdfsa8fd89asd8****
     *
     * @var string
     */
    public $imageMaterialId;

    /**
     * @description The sequence number of the multimedia material. This parameter is displayed on the frontend but not used in the operation logic.
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The normalized value of the position of the material, in the format of [unk][x,y][unk]. Valid values of x and y: **0 to 1**. For example, [unk][0.1,0.2][unk] indicates that the material is horizontally offset by 10% and vertically offset by 20% towards the upper-left corner.
     *
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @description The coordinate origin for the material. Default value: topLeft. topLeft indicates that the upper-left corner is used as the coordinate origin.
     *
     * @example topLeft
     *
     * @var string
     */
    public $positionRefer;

    /**
     * @description The ID of the video resource.
     *
     * @example asdfasdfasdfasdfa****
     *
     * @var string
     */
    public $videoResourceId;

    /**
     * @description The normalized value of the material width. The value indicates the ratio of the material width to the width of the background. Valid values: **0 to 1**.
     *
     * @example 0.4
     *
     * @var float
     */
    public $widthNormalized;
    protected $_name = [
        'channelId' => 'ChannelId',
        'fillMode' => 'FillMode',
        'heightNormalized' => 'HeightNormalized',
        'id' => 'Id',
        'imageMaterialId' => 'ImageMaterialId',
        'index' => 'Index',
        'positionNormalized' => 'PositionNormalized',
        'positionRefer' => 'PositionRefer',
        'videoResourceId' => 'VideoResourceId',
        'widthNormalized' => 'WidthNormalized',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->fillMode) {
            $res['FillMode'] = $this->fillMode;
        }
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageMaterialId) {
            $res['ImageMaterialId'] = $this->imageMaterialId;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->positionNormalized) {
            $res['PositionNormalized'] = $this->positionNormalized;
        }
        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }
        if (null !== $this->videoResourceId) {
            $res['VideoResourceId'] = $this->videoResourceId;
        }
        if (null !== $this->widthNormalized) {
            $res['WidthNormalized'] = $this->widthNormalized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaInputConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['FillMode'])) {
            $model->fillMode = $map['FillMode'];
        }
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageMaterialId'])) {
            $model->imageMaterialId = $map['ImageMaterialId'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['PositionNormalized'])) {
            if (!empty($map['PositionNormalized'])) {
                $model->positionNormalized = $map['PositionNormalized'];
            }
        }
        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }
        if (isset($map['VideoResourceId'])) {
            $model->videoResourceId = $map['VideoResourceId'];
        }
        if (isset($map['WidthNormalized'])) {
            $model->widthNormalized = $map['WidthNormalized'];
        }

        return $model;
    }
}
