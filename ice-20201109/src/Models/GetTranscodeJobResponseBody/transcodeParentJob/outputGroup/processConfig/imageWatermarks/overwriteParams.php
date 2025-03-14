<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks\overwriteParams\file;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks\overwriteParams\timeline;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @description The position of the watermark on the x-axis.
     *
     * @example 10
     *
     * @var string
     */
    public $dx;

    /**
     * @description The position of the watermark on the y-axis.
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
     * @description The height of the output video.
     *
     * @example 32
     *
     * @var string
     */
    public $height;

    /**
     * @description The reference position of the watermark. Valid values: TopLeft, TopRight, BottomLeft, and BottomRight. Default value: TopLeft.
     *
     * @example TopLeft
     *
     * @var string
     */
    public $referPos;

    /**
     * @description The timeline settings.
     *
     * @var timeline
     */
    public $timeline;

    /**
     * @description The width of the output video.
     *
     * @example 32
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'dx' => 'Dx',
        'dy' => 'Dy',
        'file' => 'File',
        'height' => 'Height',
        'referPos' => 'ReferPos',
        'timeline' => 'Timeline',
        'width' => 'Width',
    ];

    public function validate() {}

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
