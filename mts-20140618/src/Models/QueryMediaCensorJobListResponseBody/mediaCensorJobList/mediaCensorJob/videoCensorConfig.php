<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\videoCensorConfig\outputFile;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->videoCensor) {
            $res['VideoCensor'] = $this->videoCensor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoCensorConfig
     */
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
