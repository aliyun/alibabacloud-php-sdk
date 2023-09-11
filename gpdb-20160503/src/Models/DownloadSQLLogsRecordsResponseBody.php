<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DownloadSQLLogsRecordsResponseBody extends Model
{
    /**
     * @description The ID of the download task.
     *
     * @example 11
     *
     * @var int
     */
    public $downloadId;

    /**
     * @description The request ID.
     *
     * @example 7565770E-7C45-462D-BA4A-8A5396F2CAD1
     *
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
     * @return DownloadSQLLogsRecordsResponseBody
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
