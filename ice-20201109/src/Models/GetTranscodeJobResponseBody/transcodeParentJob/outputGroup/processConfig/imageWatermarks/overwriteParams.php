<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks\overwriteParams\file;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks\overwriteParams\timeline;

class overwriteParams extends Model
{
    /**
     * @var string
     */
    public $dx;
    /**
     * @var string
     */
    public $dy;
    /**
     * @var file
     */
    public $file;
    /**
     * @var string
     */
    public $height;
    /**
     * @var string
     */
    public $referPos;
    /**
     * @var timeline
     */
    public $timeline;
    /**
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
        if (null !== $this->file) {
            $this->file->validate();
        }
        if (null !== $this->timeline) {
            $this->timeline->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }

        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }

        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toArray($noStream) : $this->file;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->referPos) {
            $res['ReferPos'] = $this->referPos;
        }

        if (null !== $this->timeline) {
            $res['Timeline'] = null !== $this->timeline ? $this->timeline->toArray($noStream) : $this->timeline;
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
