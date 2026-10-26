<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionResponseBody\lastRun;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionResponseBody\lastRun\report\coverage;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionResponseBody\lastRun\report\findings;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionResponseBody\lastRun\report\reportSummary;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionResponseBody\lastRun\report\timeRange;

class report extends Model
{
    /**
     * @var string
     */
    public $completion;

    /**
     * @var coverage[]
     */
    public $coverage;

    /**
     * @var findings[]
     */
    public $findings;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $inspectionRunId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $markdown;

    /**
     * @var string
     */
    public $overview;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var reportSummary
     */
    public $reportSummary;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'completion' => 'completion',
        'coverage' => 'coverage',
        'findings' => 'findings',
        'finishedAt' => 'finishedAt',
        'html' => 'html',
        'inspectionRunId' => 'inspectionRunId',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'markdown' => 'markdown',
        'overview' => 'overview',
        'regionId' => 'regionId',
        'reportId' => 'reportId',
        'reportSummary' => 'reportSummary',
        'templateVersion' => 'templateVersion',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        if (\is_array($this->coverage)) {
            Model::validateArray($this->coverage);
        }
        if (\is_array($this->findings)) {
            Model::validateArray($this->findings);
        }
        if (null !== $this->reportSummary) {
            $this->reportSummary->validate();
        }
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completion) {
            $res['completion'] = $this->completion;
        }

        if (null !== $this->coverage) {
            if (\is_array($this->coverage)) {
                $res['coverage'] = [];
                $n1 = 0;
                foreach ($this->coverage as $item1) {
                    $res['coverage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->findings) {
            if (\is_array($this->findings)) {
                $res['findings'] = [];
                $n1 = 0;
                foreach ($this->findings as $item1) {
                    $res['findings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->html) {
            $res['html'] = $this->html;
        }

        if (null !== $this->inspectionRunId) {
            $res['inspectionRunId'] = $this->inspectionRunId;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->markdown) {
            $res['markdown'] = $this->markdown;
        }

        if (null !== $this->overview) {
            $res['overview'] = $this->overview;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }

        if (null !== $this->reportSummary) {
            $res['reportSummary'] = null !== $this->reportSummary ? $this->reportSummary->toArray($noStream) : $this->reportSummary;
        }

        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
        }

        if (null !== $this->timeRange) {
            $res['timeRange'] = null !== $this->timeRange ? $this->timeRange->toArray($noStream) : $this->timeRange;
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
        if (isset($map['completion'])) {
            $model->completion = $map['completion'];
        }

        if (isset($map['coverage'])) {
            if (!empty($map['coverage'])) {
                $model->coverage = [];
                $n1 = 0;
                foreach ($map['coverage'] as $item1) {
                    $model->coverage[$n1] = coverage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['findings'])) {
            if (!empty($map['findings'])) {
                $model->findings = [];
                $n1 = 0;
                foreach ($map['findings'] as $item1) {
                    $model->findings[$n1] = findings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['html'])) {
            $model->html = $map['html'];
        }

        if (isset($map['inspectionRunId'])) {
            $model->inspectionRunId = $map['inspectionRunId'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['markdown'])) {
            $model->markdown = $map['markdown'];
        }

        if (isset($map['overview'])) {
            $model->overview = $map['overview'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        if (isset($map['reportSummary'])) {
            $model->reportSummary = reportSummary::fromMap($map['reportSummary']);
        }

        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = timeRange::fromMap($map['timeRange']);
        }

        return $model;
    }
}
