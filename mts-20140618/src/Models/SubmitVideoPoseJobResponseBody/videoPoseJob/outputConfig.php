<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\outputConfig\dataFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\outputConfig\videoFile;
use AlibabaCloud\Tea\Model;

class outputConfig extends Model
{
    /**
     * @var dataFile
     */
    public $dataFile;

    /**
     * @var videoFile
     */
    public $videoFile;
    protected $_name = [
        'dataFile'  => 'DataFile',
        'videoFile' => 'VideoFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFile) {
            $res['DataFile'] = null !== $this->dataFile ? $this->dataFile->toMap() : null;
        }
        if (null !== $this->videoFile) {
            $res['VideoFile'] = null !== $this->videoFile ? $this->videoFile->toMap() : null;
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
        if (isset($map['DataFile'])) {
            $model->dataFile = dataFile::fromMap($map['DataFile']);
        }
        if (isset($map['VideoFile'])) {
            $model->videoFile = videoFile::fromMap($map['VideoFile']);
        }

        return $model;
    }
}
