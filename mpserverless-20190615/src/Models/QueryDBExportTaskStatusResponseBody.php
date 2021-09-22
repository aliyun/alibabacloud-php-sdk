<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class QueryDBExportTaskStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $exportedCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $detailMessage;
    protected $_name = [
        'exportedCount' => 'ExportedCount',
        'status'        => 'Status',
        'requestId'     => 'RequestId',
        'downloadUrl'   => 'DownloadUrl',
        'detailMessage' => 'DetailMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportedCount) {
            $res['ExportedCount'] = $this->exportedCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->detailMessage) {
            $res['DetailMessage'] = $this->detailMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDBExportTaskStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportedCount'])) {
            $model->exportedCount = $map['ExportedCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['DetailMessage'])) {
            $model->detailMessage = $map['DetailMessage'];
        }

        return $model;
    }
}
