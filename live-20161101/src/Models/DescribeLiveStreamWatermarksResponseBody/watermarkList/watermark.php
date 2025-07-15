<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody\watermarkList;

use AlibabaCloud\Tea\Model;

class watermark extends Model
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
     * @description The height of the watermark. Unit: pixels.
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
     * @description The position of the watermark.
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
     * @description The URL of the watermark image.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $pictureUrl;

    /**
     * @description The height of the background video. Unit: pixels.
     *
     * @example 1080
     *
     * @var int
     */
    public $refHeight;

    /**
     * @description The width of the background video. Unit: pixels.
     *
     * @example 1920
     *
     * @var int
     */
    public $refWidth;

    /**
     * @description The number of watermark rules configured for the domain name.
     *
     * @example 12
     *
     * @var int
     */
    public $ruleCount;

    /**
     * @description The ID of the watermark template.
     *
     * @example 445409ec-7eaa-4 61d-8f29-4bec2eb9 ****
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
     * @description The watermark type.
     *
     *   0: image. Only image watermarks are supported.
     *   1: text.
     *
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @description The offset of the watermark along the x-axis. Unit: pixels.
     *
     * >  The value of the RefWidth parameter is used as the reference. If the OffsetCorner parameter is set to TopLeft, the value of the XOffset parameter indicates the x-axis offset of the upper-left corner of the watermark relative to that of the background video. The directions from the coordinate axes to the center of the background video are positive. In other words, the x-axis is positive toward the right.
     *
     * @example 50.0
     *
     * @var float
     */
    public $XOffset;

    /**
     * @description The offset of the watermark along the y-axis. Unit: pixels.
     *
     * >  The value of the RefHeight parameter is used as the reference. If the OffsetCorner parameter is set to TopLeft, the value of the YOffset parameter indicates the y-axis offset of the upper-left corner of the watermark relative to that of the background video. The directions from the coordinate axes to the center of the background video are positive. In other words, the y-axis is positive downward.
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
        'pictureUrl' => 'PictureUrl',
        'refHeight' => 'RefHeight',
        'refWidth' => 'RefWidth',
        'ruleCount' => 'RuleCount',
        'templateId' => 'TemplateId',
        'transparency' => 'Transparency',
        'type' => 'Type',
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
        if (null !== $this->pictureUrl) {
            $res['PictureUrl'] = $this->pictureUrl;
        }
        if (null !== $this->refHeight) {
            $res['RefHeight'] = $this->refHeight;
        }
        if (null !== $this->refWidth) {
            $res['RefWidth'] = $this->refWidth;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->transparency) {
            $res['Transparency'] = $this->transparency;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
     * @return watermark
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
        if (isset($map['PictureUrl'])) {
            $model->pictureUrl = $map['PictureUrl'];
        }
        if (isset($map['RefHeight'])) {
            $model->refHeight = $map['RefHeight'];
        }
        if (isset($map['RefWidth'])) {
            $model->refWidth = $map['RefWidth'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Transparency'])) {
            $model->transparency = $map['Transparency'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
