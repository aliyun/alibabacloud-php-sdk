<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks\overwriteParams\file;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks\overwriteParams\timeline;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @description The horizontal offset of the watermark relative to the output video. Default value: 0.
     *
     * The following value types are supported:
     *
     *   Integer: the pixel value of the horizontal offset.
     *
     *   Valid values: [8,4096].
     *   Unit: pixels.
     *
     *   Decimal: the ratio of the horizontal offset to the width of the output video.
     *
     *   Valid values: (0,1).
     *   The decimal number can be accurate to four decimal places, such as 0.9999. Excessive digits are automatically discarded.
     *
     * @example 10
     *
     * @var string
     */
    public $dx;

    /**
     * @description The vertical offset of the watermark relative to the output video. Default value: 0.
     *
     * The following value types are supported:
     *
     *   Integer: the pixel value of the horizontal offset.
     *
     *   Valid values: [8,4096].
     *   Unit: pixels.
     *
     *   Decimal: the ratio of the vertical offset to the height of the output video.
     *
     *   Valid values: (0,1).
     *   The decimal number can be accurate to four decimal places, such as 0.9999. Excessive digits are automatically discarded.
     *
     * @example 10
     *
     * @var string
     */
    public $dy;

    /**
     * @description The watermark image file.
     *
     * @var file
     */
    public $file;

    /**
     * @description The height of the watermark image in the output video. The following value types are supported:
     *
     *   Integer: the pixel value of the watermark height.
     *
     *   Valid values: [8,4096].
     *   Unit: pixels.
     *
     *   Decimal: the ratio of the watermark height to the height of the output video.
     *
     *   Valid values: (0,1).
     *   The decimal number can be accurate to four decimal places, such as 0.9999. Excessive digits are automatically discarded.
     *
     * @example 32
     *
     * @var string
     */
    public $height;

    /**
     * @description The position of the watermark.
     *
     *   Valid values: TopRight, TopLeft, BottomRight, and BottomLeft.
     *   Default value: TopRight.
     *
     * @example TopLeft
     *
     * @var string
     */
    public $referPos;

    /**
     * @description The time settings of the dynamic watermark.
     *
     * @var timeline
     */
    public $timeline;

    /**
     * @description The width of the watermark in the output video. The following value types are supported:
     *
     *   Integer: the pixel value of the watermark width.
     *
     *   Valid values: [8,4096].
     *   Unit: pixels.
     *
     *   Decimal: the ratio of the watermark width to the width of the output video.
     *
     *   Valid values: (0,1).
     *   The decimal number can be accurate to four decimal places, such as 0.9999. Excessive digits are automatically discarded.
     *
     * @example 32
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'dx'       => 'Dx',
        'dy'       => 'Dy',
        'file'     => 'File',
        'height'   => 'Height',
        'referPos' => 'ReferPos',
        'timeline' => 'Timeline',
        'width'    => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }
        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->referPos) {
            $res['ReferPos'] = $this->referPos;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = null !== $this->timeline ? $this->timeline->toMap() : null;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overwriteParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dx'])) {
            $model->dx = $map['Dx'];
        }
        if (isset($map['Dy'])) {
            $model->dy = $map['Dy'];
        }
        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ReferPos'])) {
            $model->referPos = $map['ReferPos'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = timeline::fromMap($map['Timeline']);
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
