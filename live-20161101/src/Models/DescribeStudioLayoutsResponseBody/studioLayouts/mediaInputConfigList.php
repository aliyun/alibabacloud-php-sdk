<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\Dara\Model;

class mediaInputConfigList extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $fillMode;

    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageMaterialId;

    /**
     * @var int
     */
    public $index;

    /**
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @var string
     */
    public $positionRefer;

    /**
     * @var string
     */
    public $videoResourceId;

    /**
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

    public function validate()
    {
        if (\is_array($this->positionNormalized)) {
            Model::validateArray($this->positionNormalized);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->positionNormalized)) {
                $res['PositionNormalized'] = [];
                $n1 = 0;
                foreach ($this->positionNormalized as $item1) {
                    $res['PositionNormalized'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->positionNormalized = [];
                $n1 = 0;
                foreach ($map['PositionNormalized'] as $item1) {
                    $model->positionNormalized[$n1] = $item1;
                    ++$n1;
                }
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
