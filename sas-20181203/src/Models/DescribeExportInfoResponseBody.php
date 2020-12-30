<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExportInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $exportStatus;

    /**
     * @var int
     */
    public $currentCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $link;
    protected $_name = [
        'progress'     => 'Progress',
        'totalCount'   => 'TotalCount',
        'requestId'    => 'RequestId',
        'message'      => 'Message',
        'fileName'     => 'FileName',
        'exportStatus' => 'ExportStatus',
        'currentCount' => 'CurrentCount',
        'id'           => 'Id',
        'link'         => 'Link',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->exportStatus) {
            $res['ExportStatus'] = $this->exportStatus;
        }
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExportInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ExportStatus'])) {
            $model->exportStatus = $map['ExportStatus'];
        }
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }

        return $model;
    }
}
