<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackUpExportInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of exported entries.
     *
     * @example 29
     *
     * @var int
     */
    public $currentCount;

    /**
     * @description The name of the file.
     *
     * @example suspicious_event_20221203
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The time when the export task was created.
     *
     * @example 1671607025000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The ID of the export task.
     *
     * @example 273698***
     *
     * @var int
     */
    public $id;

    /**
     * @description The URL at which you can download the archived information.
     *
     * @example http://xxx.oss-cn-xxx.aliyuncs.com/export/assetInstance_20221221_1671606250570.zip
     *
     * @var string
     */
    public $link;

    /**
     * @description The error message that is returned when the export task fails.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The progress percentage of the export task.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The status of the export task. Valid values:
     *
     *   **init**: The task is being initialized.
     *   **exporting**: The task is in progress.
     *   **success**: The task is complete.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The total number of entries in the file.
     *
     * @example 29
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentCount' => 'CurrentCount',
        'fileName'     => 'FileName',
        'gmtCreate'    => 'GmtCreate',
        'id'           => 'Id',
        'link'         => 'Link',
        'message'      => 'Message',
        'progress'     => 'Progress',
        'status'       => 'Status',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
