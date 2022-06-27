<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDownloadRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $downloadId;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $exceptionMsg;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'downloadId'   => 'DownloadId',
        'downloadUrl'  => 'DownloadUrl',
        'exceptionMsg' => 'ExceptionMsg',
        'fileName'     => 'FileName',
        'status'       => 'Status',
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
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
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
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
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

        return $model;
    }
}
