<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveStreamWatermarkRequest extends Model
{
    /**
     * @description The description of the watermark.
     *
     * @example my watermark
     *
     * @var string
     */
    public $description;

    /**
     * @description The height of the watermark. Unit: pixel. The height of the watermark is scaled in proportion to the height of the background video.
     *
     * @example 200
     *
     * @var int
     */
    public $height;

    /**
     * @description The name of the watermark.
     *
     * @example livewatermark****
     *
     * @var string
     */
    public $name;

    /**
     * @description The position of the watermark. Valid values:
     *
     *   TopLeft: the upper-left corner.
     *   TopRight: the upper-right corner.
     *   BottomLeft: the lower-left corner.
     *   BottomRight: the lower-right corner.
     *
     * @example TopRight
     *
     * @var string
     */
    public $offsetCorner;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The URL of the watermark image.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $pictureUrl;

    /**
     * @description The height of the background video. Unit: pixel.
     *
     * @example 1080
     *
     * @var int
     */
    public $refHeight;

    /**
     * @description The width of the background video. Unit: pixel.
     *
     * @example 1920
     *
     * @var int
     */
    public $refWidth;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the watermark template.
     *
     * >  You can obtain the template ID by checking the value of the TemplateId parameter that is returned by the [AddLiveStreamWatermark](https://help.aliyun.com/document_detail/410759.html) operation.
     *
     * This parameter is required.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The transparency of the watermark. A smaller value indicates a more transparent watermark. Valid values: 0 to 255.
     *
     * @example 255
     *
     * @var int
     */
    public $transparency;

    /**
     * @description The offset of the watermark along the x-axis. Unit: pixel.
     *
     * >  In this case, the value of the RefWidth parameter is used as the reference. If the OffsetCorner parameter is set to TopLeft, the value of the XOffset parameter indicates the x-axis offset of the upper-left corner of the watermark relative to that of the background video. The directions from the coordinate axes to the center of the background video are positive. In other words, the x-axis is positive toward the right.
     *
     * @example 50.0
     *
     * @var float
     */
    public $XOffset;

    /**
     * @description The offset of the watermark along the y-axis. Unit: pixel.
     *
     * >  In this case, the value of the RefHeight parameter is used as the reference. If the OffsetCorner parameter is set to TopLeft, the value of the YOffset parameter indicates the y-axis offset of the upper-left corner of the watermark relative to that of the background video. The directions from the coordinate axes to the center of the background video are positive. In other words, the y-axis is positive downward.
     *
     * @example 100.0
     *
     * @var float
     */
    public $YOffset;
    protected $_name = [
        'description' => 'Description',
        'height' => 'Height',
        'name' => 'Name',
        'offsetCorner' => 'OffsetCorner',
        'ownerId' => 'OwnerId',
        'pictureUrl' => 'PictureUrl',
        'refHeight' => 'RefHeight',
        'refWidth' => 'RefWidth',
        'regionId' => 'RegionId',
        'templateId' => 'TemplateId',
        'transparency' => 'Transparency',
        'XOffset' => 'XOffset',
        'YOffset' => 'YOffset',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->offsetCorner) {
            $res['OffsetCorner'] = $this->offsetCorner;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pictureUrl) {
            $res['PictureUrl'] = $this->pictureUrl;
        }
        if (null !== $this->refHeight) {
            $res['RefHeight'] = $this->refHeight;
        }
        if (null !== $this->refWidth) {
            $res['RefWidth'] = $this->refWidth;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->transparency) {
            $res['Transparency'] = $this->transparency;
        }
        if (null !== $this->XOffset) {
            $res['XOffset'] = $this->XOffset;
        }
        if (null !== $this->YOffset) {
            $res['YOffset'] = $this->YOffset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveStreamWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OffsetCorner'])) {
            $model->offsetCorner = $map['OffsetCorner'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PictureUrl'])) {
            $model->pictureUrl = $map['PictureUrl'];
        }
        if (isset($map['RefHeight'])) {
            $model->refHeight = $map['RefHeight'];
        }
        if (isset($map['RefWidth'])) {
            $model->refWidth = $map['RefWidth'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Transparency'])) {
            $model->transparency = $map['Transparency'];
        }
        if (isset($map['XOffset'])) {
            $model->XOffset = $map['XOffset'];
        }
        if (isset($map['YOffset'])) {
            $model->YOffset = $map['YOffset'];
        }

        return $model;
    }
}
