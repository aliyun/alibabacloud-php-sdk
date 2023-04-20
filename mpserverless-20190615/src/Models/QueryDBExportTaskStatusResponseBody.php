<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class QueryDBExportTaskStatusResponseBody extends Model
{
    /**
     * @example SERVER_BUSY
     *
     * @var string
     */
    public $detailMessage;

    /**
     * @example https://mps-zjk-share.oss-cn-zhangjiakou.aliyuncs.com/mongo/export/0e16bb12-14af-4635-b24c-5ac1a9a7bb9f/20200720104406_0150006d-ab93-4920-a63e-c011dea1e089.csv?Expires=1595215206&OSSAccessKeyId=LTAIupaslTlU****&Signature=CKxpKX3Wj%2BLVtZ****%2FTbe%2BX9sc%3D
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @example 2
     *
     * @var string
     */
    public $exportedCount;

    /**
     * @example 58881468-E779-4203-B933-BD53FDC60D6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'detailMessage' => 'DetailMessage',
        'downloadUrl'   => 'DownloadUrl',
        'exportedCount' => 'ExportedCount',
        'requestId'     => 'RequestId',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailMessage) {
            $res['DetailMessage'] = $this->detailMessage;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->exportedCount) {
            $res['ExportedCount'] = $this->exportedCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DetailMessage'])) {
            $model->detailMessage = $map['DetailMessage'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ExportedCount'])) {
            $model->exportedCount = $map['ExportedCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
