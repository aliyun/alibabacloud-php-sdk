<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListResponseBody;

use AlibabaCloud\Tea\Model;

class reportList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $diagnosticTime;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $downloadURL;
    protected $_name = [
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
        'diagnosticTime' => 'DiagnosticTime',
        'score'          => 'Score',
        'downloadURL'    => 'DownloadURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->diagnosticTime) {
            $res['DiagnosticTime'] = $this->diagnosticTime;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->downloadURL) {
            $res['DownloadURL'] = $this->downloadURL;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['DiagnosticTime'])) {
            $model->diagnosticTime = $map['DiagnosticTime'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['DownloadURL'])) {
            $model->downloadURL = $map['DownloadURL'];
        }

        return $model;
    }
}
