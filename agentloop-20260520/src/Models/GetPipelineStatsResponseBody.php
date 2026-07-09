<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineStatsResponseBody\summary;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineStatsResponseBody\timeSeries;

class GetPipelineStatsResponseBody extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var summary
     */
    public $summary;

    /**
     * @var timeSeries[]
     */
    public $timeSeries;
    protected $_name = [
        'endTime' => 'endTime',
        'granularity' => 'granularity',
        'pipelineName' => 'pipelineName',
        'requestId' => 'requestId',
        'startTime' => 'startTime',
        'summary' => 'summary',
        'timeSeries' => 'timeSeries',
    ];

    public function validate()
    {
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        if (\is_array($this->timeSeries)) {
            Model::validateArray($this->timeSeries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->granularity) {
            $res['granularity'] = $this->granularity;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->summary) {
            $res['summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->timeSeries) {
            if (\is_array($this->timeSeries)) {
                $res['timeSeries'] = [];
                $n1 = 0;
                foreach ($this->timeSeries as $item1) {
                    $res['timeSeries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['granularity'])) {
            $model->granularity = $map['granularity'];
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['summary'])) {
            $model->summary = summary::fromMap($map['summary']);
        }

        if (isset($map['timeSeries'])) {
            if (!empty($map['timeSeries'])) {
                $model->timeSeries = [];
                $n1 = 0;
                foreach ($map['timeSeries'] as $item1) {
                    $model->timeSeries[$n1] = timeSeries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
