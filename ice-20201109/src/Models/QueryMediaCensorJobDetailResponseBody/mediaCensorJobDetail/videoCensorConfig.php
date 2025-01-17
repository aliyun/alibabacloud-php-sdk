<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\videoCensorConfig\outputFile;

class videoCensorConfig extends Model
{
    /**
     * @var string
     */
    public $bizType;
    /**
     * @var outputFile
     */
    public $outputFile;
    /**
     * @var string
     */
    public $videoCensor;
    protected $_name = [
        'bizType'     => 'BizType',
        'outputFile'  => 'OutputFile',
        'videoCensor' => 'VideoCensor',
    ];

    public function validate()
    {
        if (null !== $this->outputFile) {
            $this->outputFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toArray($noStream) : $this->outputFile;
        }

        if (null !== $this->videoCensor) {
            $res['VideoCensor'] = $this->videoCensor;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }

        if (isset($map['VideoCensor'])) {
            $model->videoCensor = $map['VideoCensor'];
        }

        return $model;
    }
}
