<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\outputConfig\dataFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\outputConfig\videoFile;
use AlibabaCloud\Tea\Model;

class outputConfig extends Model
{
    /**
     * @var videoFile
     */
    public $videoFile;

    /**
     * @var dataFile
     */
    public $dataFile;
    protected $_name = [
        'videoFile' => 'VideoFile',
        'dataFile'  => 'DataFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoFile) {
            $res['VideoFile'] = null !== $this->videoFile ? $this->videoFile->toMap() : null;
        }
        if (null !== $this->dataFile) {
            $res['DataFile'] = null !== $this->dataFile ? $this->dataFile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoFile'])) {
            $model->videoFile = videoFile::fromMap($map['VideoFile']);
        }
        if (isset($map['DataFile'])) {
            $model->dataFile = dataFile::fromMap($map['DataFile']);
        }

        return $model;
    }
}
