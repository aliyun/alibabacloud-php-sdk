<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailResponseBody\checkItemResults;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailResponseBody\summary;

class GetClusterInspectReportDetailResponseBody extends Model
{
    /**
     * @var checkItemResults[]
     */
    public $checkItemResults;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
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

    public function validate()
    {
        if (\is_array($this->checkItemResults)) {
            Model::validateArray($this->checkItemResults);
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkItemResults) {
            if (\is_array($this->checkItemResults)) {
                $res['checkItemResults'] = [];
                $n1 = 0;
                foreach ($this->checkItemResults as $item1) {
                    $res['checkItemResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkItemResults'])) {
            if (!empty($map['checkItemResults'])) {
                $model->checkItemResults = [];
                $n1 = 0;
                foreach ($map['checkItemResults'] as $item1) {
                    $model->checkItemResults[$n1] = checkItemResults::fromMap($item1);
                    ++$n1;
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
