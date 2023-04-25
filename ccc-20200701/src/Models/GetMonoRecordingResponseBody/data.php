<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetMonoRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @example job-6538214103689****.wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @example http://ccc-v2-online.oss-cn-shanghai.aliyuncs.com/ccc-record/job-6538214103689****.wav?Expires=1610910578&OSSAccessKeyId=****&Signature=****
     *
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'fileUrl'  => 'FileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
