<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob;

use AlibabaCloud\Tea\Model;

class report extends Model
{
    /**
     * @var string
     */
    public $failedFiles;

    /**
     * @var string
     */
    public $reportTaskStatus;

    /**
     * @var string
     */
    public $skippedFiles;

    /**
     * @var string
     */
    public $successFiles;

    /**
     * @var string
     */
    public $totalFiles;
    protected $_name = [
        'failedFiles'      => 'FailedFiles',
        'reportTaskStatus' => 'ReportTaskStatus',
        'skippedFiles'     => 'SkippedFiles',
        'successFiles'     => 'SuccessFiles',
        'totalFiles'       => 'TotalFiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedFiles) {
            $res['FailedFiles'] = $this->failedFiles;
        }
        if (null !== $this->reportTaskStatus) {
            $res['ReportTaskStatus'] = $this->reportTaskStatus;
        }
        if (null !== $this->skippedFiles) {
            $res['SkippedFiles'] = $this->skippedFiles;
        }
        if (null !== $this->successFiles) {
            $res['SuccessFiles'] = $this->successFiles;
        }
        if (null !== $this->totalFiles) {
            $res['TotalFiles'] = $this->totalFiles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return report
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedFiles'])) {
            $model->failedFiles = $map['FailedFiles'];
        }
        if (isset($map['ReportTaskStatus'])) {
            $model->reportTaskStatus = $map['ReportTaskStatus'];
        }
        if (isset($map['SkippedFiles'])) {
            $model->skippedFiles = $map['SkippedFiles'];
        }
        if (isset($map['SuccessFiles'])) {
            $model->successFiles = $map['SuccessFiles'];
        }
        if (isset($map['TotalFiles'])) {
            $model->totalFiles = $map['TotalFiles'];
        }

        return $model;
    }
}
