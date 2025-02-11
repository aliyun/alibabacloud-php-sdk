<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDownloadRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
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
    public $fileName;
    /**
     * @var string
     */
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
