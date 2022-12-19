<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulExportInfoResponseBody extends Model
{
    /**
     * @description The number of exported entries.
     *
     * @example 1
     *
     * @var int
     */
    public $currentCount;

    /**
     * @description The status of the export task. Valid values:
     *
     * - **init**: The task is being initialized.
     * - **exporting**: The task is in progress.
     * - **success**: The task is complete.
     * @example success
     *
     * @var string
     */
    public $exportStatus;

    /**
     * @description The name of the exported Excel file.
     *
     * @example app_20210917
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The ID of the vulnerability export task.
     *
     * @example 14356
     *
     * @var int
     */
    public $id;

    /**
     * @description The URL at which you can download the exported Excel file.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $link;

    /**
     * @description The message that shows the task result. The value is fixed as **success*, which indicates that the export task is completed.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The progress percentage of the asset export task.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 4C1AE3F3-18FA-4108-BXXX-AFA1A032756C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries in the Excel file.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentCount' => 'CurrentCount',
        'exportStatus' => 'ExportStatus',
        'fileName'     => 'FileName',
        'id'           => 'Id',
        'link'         => 'Link',
        'message'      => 'Message',
        'progress'     => 'Progress',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->exportStatus) {
            $res['ExportStatus'] = $this->exportStatus;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulExportInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['ExportStatus'])) {
            $model->exportStatus = $map['ExportStatus'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
