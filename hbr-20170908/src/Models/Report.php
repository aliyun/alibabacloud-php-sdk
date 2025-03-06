<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class Report extends Model
{
    /**
     * @example temp/report/r-0000dnz7p4pk31u6madf_failed.csv
     *
     * @var string
     */
    public $failedFiles;

    /**
     * @example temp/report/r-0000dnz7p4pk31u6madf_skipped.csv
     *
     * @var string
     */
    public $skippedFiles;

    /**
     * @example temp/report/r-0000dnz7p4pk31u6madf_success.csv
     *
     * @var string
     */
    public $successFiles;

    /**
     * @example temp/report/r-0000dnz7p4pk31u6madf_total.csv
     *
     * @var string
     */
    public $totalFiles;
    protected $_name = [
        'failedFiles'  => 'FailedFiles',
        'skippedFiles' => 'SkippedFiles',
        'successFiles' => 'SuccessFiles',
        'totalFiles'   => 'TotalFiles',
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
     * @return Report
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedFiles'])) {
            $model->failedFiles = $map['FailedFiles'];
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
