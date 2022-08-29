<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\subtitles;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\subtitles\overwriteParams\file;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @var string
     */
    public $charEnc;

    /**
     * @var file
     */
    public $file;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'charEnc' => 'CharEnc',
        'file'    => 'File',
        'format'  => 'Format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charEnc) {
            $res['CharEnc'] = $this->charEnc;
        }
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
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
        if (isset($map['CharEnc'])) {
            $model->charEnc = $map['CharEnc'];
        }
        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        return $model;
    }
}
