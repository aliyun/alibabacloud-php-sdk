<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetEarlyMediaRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example job-6538214103689****-earlyMedia..wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://ccc-v2-online.oss-cn-shanghai.aliyuncs.com/ccc-record-mixed/ccc-test/2022/06/voicemail.job-054ded02****.wav?Expires=1656074923&OSSAccessKeyId=****&Signature=****
     *
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'fileName' => 'FileName',
        'fileUrl'  => 'FileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
