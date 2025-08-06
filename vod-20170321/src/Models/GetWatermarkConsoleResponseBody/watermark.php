<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkConsoleResponseBody;

use AlibabaCloud\Dara\Model;

class watermark extends Model
{
    /**
     * @var string
     */
    public $active;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $horizontalOffset;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $screenMode;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $verticalOffset;

    /**
     * @var int
     */
    public $videoHeight;

    /**
     * @var int
     */
    public $videoWidth;

    /**
     * @var string
     */
    public $watermarkId;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'active' => 'Active',
        'createTime' => 'CreateTime',
        'height' => 'Height',
        'horizontalOffset' => 'HorizontalOffset',
        'isDefault' => 'IsDefault',
        'name' => 'Name',
        'position' => 'Position',
        'screenMode' => 'ScreenMode',
        'url' => 'Url',
        'verticalOffset' => 'VerticalOffset',
        'videoHeight' => 'VideoHeight',
        'videoWidth' => 'VideoWidth',
        'watermarkId' => 'WatermarkId',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->horizontalOffset) {
            $res['HorizontalOffset'] = $this->horizontalOffset;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->screenMode) {
            $res['ScreenMode'] = $this->screenMode;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->verticalOffset) {
            $res['VerticalOffset'] = $this->verticalOffset;
        }

        if (null !== $this->videoHeight) {
            $res['VideoHeight'] = $this->videoHeight;
        }

        if (null !== $this->videoWidth) {
            $res['VideoWidth'] = $this->videoWidth;
        }

        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['HorizontalOffset'])) {
            $model->horizontalOffset = $map['HorizontalOffset'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['ScreenMode'])) {
            $model->screenMode = $map['ScreenMode'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['VerticalOffset'])) {
            $model->verticalOffset = $map['VerticalOffset'];
        }

        if (isset($map['VideoHeight'])) {
            $model->videoHeight = $map['VideoHeight'];
        }

        if (isset($map['VideoWidth'])) {
            $model->videoWidth = $map['VideoWidth'];
        }

        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
