<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterInspectReportsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterInspectReportsResponseBody\reports\summary;
use AlibabaCloud\Tea\Model;

class reports extends Model
{
    /**
     * @description The report completion time.
     *
     * @example 2024-12-18T19:40:16.778333+08:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description An inspection report ID.
     *
     * @example 782df89346054a0000562063a6****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The report start time.
     *
     * @example 2024-12-18T19:40:16.778333+08:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The inspection report status.
     *
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @description The inspection summary.
     *
     * @var summary
     */
    public $summary;
    protected $_name = [
        'endTime' => 'endTime',
        'reportId' => 'reportId',
        'startTime' => 'startTime',
        'status' => 'status',
        'summary' => 'summary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->summary) {
            $res['summary'] = null !== $this->summary ? $this->summary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['summary'])) {
            $model->summary = summary::fromMap($map['summary']);
        }

        return $model;
    }
}
