<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListResponseBody;

use AlibabaCloud\Tea\Model;

class reportList extends Model
{
    /**
     * @description The time when the diagnosis was performed.
     *
     * @example 2018-01-17T12:46:09Z
     *
     * @var string
     */
    public $diagnosticTime;

    /**
     * @description The URL that is used to download the backup set over the Internet. If the backup set cannot be downloaded, an empty string is returned.
     *
     * @example http://rdsreport-hz-v3.oss-cn-hangzhou.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $downloadURL;

    /**
     * @description The end time of the monitoring data.
     *
     * @example 2018-01-10T15:31:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The diagnostic score.
     *
     * @example 100
     *
     * @var int
     */
    public $score;

    /**
     * @description The start time of the monitoring data.
     *
     * @example 2018-01-10T15:30:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'diagnosticTime' => 'DiagnosticTime',
        'downloadURL'    => 'DownloadURL',
        'endTime'        => 'EndTime',
        'score'          => 'Score',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosticTime) {
            $res['DiagnosticTime'] = $this->diagnosticTime;
        }
        if (null !== $this->downloadURL) {
            $res['DownloadURL'] = $this->downloadURL;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reportList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosticTime'])) {
            $model->diagnosticTime = $map['DiagnosticTime'];
        }
        if (isset($map['DownloadURL'])) {
            $model->downloadURL = $map['DownloadURL'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
