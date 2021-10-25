<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DownloadDiagnosisRecordsResponseBody extends Model
{
    /**
     * @var int
     */
    public $downloadId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'downloadId' => 'DownloadId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadId) {
            $res['DownloadId'] = $this->downloadId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadDiagnosisRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadId'])) {
            $model->downloadId = $map['DownloadId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
