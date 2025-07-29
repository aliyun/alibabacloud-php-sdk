<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailResponseBody\checkItemResults;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailResponseBody\summary;
use AlibabaCloud\Tea\Model;

class GetClusterInspectReportDetailResponseBody extends Model
{
    /**
     * @description The results.
     *
     * @var checkItemResults[]
     */
    public $checkItemResults;

    /**
     * @description The completion time of the inspection report.
     *
     * @example 2024-12-18T19:41:12.778433+08:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The token that is used to display the returned tags on multiple pages.
     *
     * @example AK8uQQrxgFK8sbARvnCj6w9R3kPme4I3
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the inspection report.
     *
     * @example 782df89346054a0000562063a****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The request ID.
     *
     * @example 49511F2D-D56A-5C24-B9AE-C8491E09B***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time of the inspection report.
     *
     * @example 2024-12-18T19:40:16.778333+08:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the inspection report. Valid values:
     *
     *   completed: The inspection report is generated.
     *   running: The inspection report is generating.
     *
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @description Overview of inspection reports.
     *
     * @var summary
     */
    public $summary;
    protected $_name = [
        'checkItemResults' => 'checkItemResults',
        'endTime' => 'endTime',
        'nextToken' => 'nextToken',
        'reportId' => 'reportId',
        'requestId' => 'requestId',
        'startTime' => 'startTime',
        'status' => 'status',
        'summary' => 'summary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItemResults) {
            $res['checkItemResults'] = [];
            if (null !== $this->checkItemResults && \is_array($this->checkItemResults)) {
                $n = 0;
                foreach ($this->checkItemResults as $item) {
                    $res['checkItemResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
     * @return GetClusterInspectReportDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkItemResults'])) {
            if (!empty($map['checkItemResults'])) {
                $model->checkItemResults = [];
                $n = 0;
                foreach ($map['checkItemResults'] as $item) {
                    $model->checkItemResults[$n++] = null !== $item ? checkItemResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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
