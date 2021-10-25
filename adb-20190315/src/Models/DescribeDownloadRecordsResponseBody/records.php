<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDownloadRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $downloadId;

    /**
     * @var string
     */
    public $exceptionMsg;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'status'       => 'Status',
        'downloadId'   => 'DownloadId',
        'exceptionMsg' => 'ExceptionMsg',
        'url'          => 'Url',
        'fileName'     => 'FileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->downloadId) {
            $res['DownloadId'] = $this->downloadId;
        }
        if (null !== $this->exceptionMsg) {
            $res['ExceptionMsg'] = $this->exceptionMsg;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DownloadId'])) {
            $model->downloadId = $map['DownloadId'];
        }
        if (isset($map['ExceptionMsg'])) {
            $model->exceptionMsg = $map['ExceptionMsg'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        return $model;
    }
}
