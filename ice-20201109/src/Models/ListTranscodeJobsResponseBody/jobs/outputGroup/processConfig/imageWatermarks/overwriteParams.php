<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\imageWatermarks;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\imageWatermarks\overwriteParams\file;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig\imageWatermarks\overwriteParams\timeline;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @description 水印位置，x
     *
     * @var string
     */
    public $dx;

    /**
     * @description 水印位置，y
     *
     * @var string
     */
    public $dy;

    /**
     * @description 水印文件oss路径
     *
     * @var file
     */
    public $file;

    /**
     * @description 高
     *
     * @var string
     */
    public $height;

    /**
     * @description 参考位置: TopLeft, TopRight, BottomLeft, BottomRight  default: TopLeft
     *
     * @var string
     */
    public $referPos;

    /**
     * @description 显示时间设置
     *
     * @var timeline
     */
    public $timeline;

    /**
     * @description 宽
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
