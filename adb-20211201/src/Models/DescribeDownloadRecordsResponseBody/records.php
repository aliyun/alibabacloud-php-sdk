<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDownloadRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The download job ID.
     *
     * @example 636890
     *
     * @var int
     */
    public $downloadId;

    /**
     * @description The error message returned if the download job failed.
     *
     * @example The query result is empty.
     *
     * @var string
     */
    public $exceptionMsg;

    /**
     * @description The name of the downloaded file.
     *
     * @example 20210806094635-20210806095135
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The status of the download job. Valid values:
     *
     *   **running**
     *   **finished**
     *   **failed**
     *
     * @example finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The download URL of the file.
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'downloadId'   => 'DownloadId',
        'exceptionMsg' => 'ExceptionMsg',
        'fileName'     => 'FileName',
        'status'       => 'Status',
        'url'          => 'Url',
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
        if (null !== $this->exceptionMsg) {
            $res['ExceptionMsg'] = $this->exceptionMsg;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadId'])) {
            $model->downloadId = $map['DownloadId'];
        }
        if (isset($map['ExceptionMsg'])) {
            $model->exceptionMsg = $map['ExceptionMsg'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
