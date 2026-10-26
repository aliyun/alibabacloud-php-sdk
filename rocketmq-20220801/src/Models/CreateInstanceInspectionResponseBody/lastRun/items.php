<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\lastRun;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\lastRun\items\effectiveConfig;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\lastRun\items\metrics;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\lastRun\items\resourceSummary;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\lastRun\items\timeRange;

class items extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var effectiveConfig
     */
    public $effectiveConfig;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $headline;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $observedAt;

    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var resourceSummary
     */
    public $resourceSummary;

    /**
     * @var string[]
     */
    public $resourceTypes;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'description' => 'description',
        'effectiveConfig' => 'effectiveConfig',
        'errorCode' => 'errorCode',
        'headline' => 'headline',
        'metrics' => 'metrics',
        'name' => 'name',
        'observedAt' => 'observedAt',
        'resourceCount' => 'resourceCount',
        'resourceSummary' => 'resourceSummary',
        'resourceTypes' => 'resourceTypes',
        'result' => 'result',
        'severity' => 'severity',
        'status' => 'status',
        'templateCode' => 'templateCode',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        if (null !== $this->effectiveConfig) {
            $this->effectiveConfig->validate();
        }
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (null !== $this->resourceSummary) {
            $this->resourceSummary->validate();
        }
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->effectiveConfig) {
            $res['effectiveConfig'] = null !== $this->effectiveConfig ? $this->effectiveConfig->toArray($noStream) : $this->effectiveConfig;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->headline) {
            $res['headline'] = $this->headline;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->observedAt) {
            $res['observedAt'] = $this->observedAt;
        }

        if (null !== $this->resourceCount) {
            $res['resourceCount'] = $this->resourceCount;
        }

        if (null !== $this->resourceSummary) {
            $res['resourceSummary'] = null !== $this->resourceSummary ? $this->resourceSummary->toArray($noStream) : $this->resourceSummary;
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['resourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['resourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['effectiveConfig'])) {
            $model->effectiveConfig = effectiveConfig::fromMap($map['effectiveConfig']);
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['headline'])) {
            $model->headline = $map['headline'];
        }

        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['metrics'] as $item1) {
                    $model->metrics[$n1] = metrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['observedAt'])) {
            $model->observedAt = $map['observedAt'];
        }

        if (isset($map['resourceCount'])) {
            $model->resourceCount = $map['resourceCount'];
        }

        if (isset($map['resourceSummary'])) {
            $model->resourceSummary = resourceSummary::fromMap($map['resourceSummary']);
        }

        if (isset($map['resourceTypes'])) {
            if (!empty($map['resourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['resourceTypes'] as $item1) {
                    $model->resourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = timeRange::fromMap($map['timeRange']);
        }

        return $model;
    }
}
