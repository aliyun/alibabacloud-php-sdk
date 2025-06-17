<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputDetail\result\outputFile;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputDetailFileMeta;

class result extends Model
{
    /**
     * @var MediaConvertOutputDetailFileMeta
     */
    public $outFileMeta;

    /**
     * @var outputFile
     */
    public $outputFile;
    protected $_name = [
        'outFileMeta' => 'OutFileMeta',
        'outputFile' => 'OutputFile',
    ];

    public function validate()
    {
        if (null !== $this->outFileMeta) {
            $this->outFileMeta->validate();
        }
        if (null !== $this->outputFile) {
            $this->outputFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outFileMeta) {
            $res['OutFileMeta'] = null !== $this->outFileMeta ? $this->outFileMeta->toArray($noStream) : $this->outFileMeta;
        }

        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toArray($noStream) : $this->outputFile;
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
        if (isset($map['OutFileMeta'])) {
            $model->outFileMeta = MediaConvertOutputDetailFileMeta::fromMap($map['OutFileMeta']);
        }

        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }

        return $model;
    }
}
