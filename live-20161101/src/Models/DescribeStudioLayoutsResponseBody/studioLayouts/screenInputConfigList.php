<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\Tea\Model;

class screenInputConfigList extends Model
{
    /**
     * @var int
     */
    public $portraitType;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $positionX;

    /**
     * @var string
     */
    public $color;

    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var string
     */
    public $positionY;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $videoResourceId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'portraitType'     => 'PortraitType',
        'index'            => 'Index',
        'positionX'        => 'PositionX',
        'color'            => 'Color',
        'heightNormalized' => 'HeightNormalized',
        'positionY'        => 'PositionY',
        'channelId'        => 'ChannelId',
        'videoResourceId'  => 'VideoResourceId',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portraitType) {
            $res['PortraitType'] = $this->portraitType;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->positionX) {
            $res['PositionX'] = $this->positionX;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->positionY) {
            $res['PositionY'] = $this->positionY;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->videoResourceId) {
            $res['VideoResourceId'] = $this->videoResourceId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return screenInputConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortraitType'])) {
            $model->portraitType = $map['PortraitType'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['PositionX'])) {
            $model->positionX = $map['PositionX'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['PositionY'])) {
            $model->positionY = $map['PositionY'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['VideoResourceId'])) {
            $model->videoResourceId = $map['VideoResourceId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
