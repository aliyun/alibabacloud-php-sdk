<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\transcodeOutput;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\transcodeOutput\digiWaterMark\inputFile;
use AlibabaCloud\Tea\Model;

class digiWaterMark extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $alpha;

    /**
     * @var inputFile
     */
    public $inputFile;
    protected $_name = [
        'type'      => 'Type',
        'alpha'     => 'Alpha',
        'inputFile' => 'InputFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->alpha) {
            $res['Alpha'] = $this->alpha;
        }
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return digiWaterMark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Alpha'])) {
            $model->alpha = $map['Alpha'];
        }
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }

        return $model;
    }
}
