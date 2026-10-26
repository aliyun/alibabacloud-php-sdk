<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionReportResponseBody\findings\resource;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionReportResponseBody\findings\timeRange;

class findings extends Model
{
    /**
     * @var string[]
     */
    public $alternatives;

    /**
     * @var string
     */
    public $boundary;

    /**
     * @var string
     */
    public $cause;

    /**
     * @var string
     */
    public $confidence;

    /**
     * @var string[]
     */
    public $evidence;

    /**
     * @var string
     */
    public $impact;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string[]
     */
    public $missingEvidence;

    /**
     * @var string[]
     */
    public $observations;

    /**
     * @var string
     */
    public $observedAt;

    /**
     * @var string[]
     */
    public $recommendations;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $riskType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var timeRange
     */
    public $timeRange;

    /**
     * @var string[]
     */
    public $verification;
    protected $_name = [
        'alternatives' => 'alternatives',
        'boundary' => 'boundary',
        'cause' => 'cause',
        'confidence' => 'confidence',
        'evidence' => 'evidence',
        'impact' => 'impact',
        'location' => 'location',
        'missingEvidence' => 'missingEvidence',
        'observations' => 'observations',
        'observedAt' => 'observedAt',
        'recommendations' => 'recommendations',
        'resource' => 'resource',
        'riskType' => 'riskType',
        'source' => 'source',
        'templateCode' => 'templateCode',
        'timeRange' => 'timeRange',
        'verification' => 'verification',
    ];

    public function validate()
    {
        if (\is_array($this->alternatives)) {
            Model::validateArray($this->alternatives);
        }
        if (\is_array($this->evidence)) {
            Model::validateArray($this->evidence);
        }
        if (\is_array($this->missingEvidence)) {
            Model::validateArray($this->missingEvidence);
        }
        if (\is_array($this->observations)) {
            Model::validateArray($this->observations);
        }
        if (\is_array($this->recommendations)) {
            Model::validateArray($this->recommendations);
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        if (\is_array($this->verification)) {
            Model::validateArray($this->verification);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alternatives) {
            if (\is_array($this->alternatives)) {
                $res['alternatives'] = [];
                $n1 = 0;
                foreach ($this->alternatives as $item1) {
                    $res['alternatives'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->boundary) {
            $res['boundary'] = $this->boundary;
        }

        if (null !== $this->cause) {
            $res['cause'] = $this->cause;
        }

        if (null !== $this->confidence) {
            $res['confidence'] = $this->confidence;
        }

        if (null !== $this->evidence) {
            if (\is_array($this->evidence)) {
                $res['evidence'] = [];
                $n1 = 0;
                foreach ($this->evidence as $item1) {
                    $res['evidence'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->impact) {
            $res['impact'] = $this->impact;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->missingEvidence) {
            if (\is_array($this->missingEvidence)) {
                $res['missingEvidence'] = [];
                $n1 = 0;
                foreach ($this->missingEvidence as $item1) {
                    $res['missingEvidence'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->observations) {
            if (\is_array($this->observations)) {
                $res['observations'] = [];
                $n1 = 0;
                foreach ($this->observations as $item1) {
                    $res['observations'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->observedAt) {
            $res['observedAt'] = $this->observedAt;
        }

        if (null !== $this->recommendations) {
            if (\is_array($this->recommendations)) {
                $res['recommendations'] = [];
                $n1 = 0;
                foreach ($this->recommendations as $item1) {
                    $res['recommendations'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resource) {
            $res['resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->riskType) {
            $res['riskType'] = $this->riskType;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
        }

        if (null !== $this->timeRange) {
            $res['timeRange'] = null !== $this->timeRange ? $this->timeRange->toArray($noStream) : $this->timeRange;
        }

        if (null !== $this->verification) {
            if (\is_array($this->verification)) {
                $res['verification'] = [];
                $n1 = 0;
                foreach ($this->verification as $item1) {
                    $res['verification'][$n1] = $item1;
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
        if (isset($map['alternatives'])) {
            if (!empty($map['alternatives'])) {
                $model->alternatives = [];
                $n1 = 0;
                foreach ($map['alternatives'] as $item1) {
                    $model->alternatives[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['boundary'])) {
            $model->boundary = $map['boundary'];
        }

        if (isset($map['cause'])) {
            $model->cause = $map['cause'];
        }

        if (isset($map['confidence'])) {
            $model->confidence = $map['confidence'];
        }

        if (isset($map['evidence'])) {
            if (!empty($map['evidence'])) {
                $model->evidence = [];
                $n1 = 0;
                foreach ($map['evidence'] as $item1) {
                    $model->evidence[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['impact'])) {
            $model->impact = $map['impact'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['missingEvidence'])) {
            if (!empty($map['missingEvidence'])) {
                $model->missingEvidence = [];
                $n1 = 0;
                foreach ($map['missingEvidence'] as $item1) {
                    $model->missingEvidence[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['observations'])) {
            if (!empty($map['observations'])) {
                $model->observations = [];
                $n1 = 0;
                foreach ($map['observations'] as $item1) {
                    $model->observations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['observedAt'])) {
            $model->observedAt = $map['observedAt'];
        }

        if (isset($map['recommendations'])) {
            if (!empty($map['recommendations'])) {
                $model->recommendations = [];
                $n1 = 0;
                foreach ($map['recommendations'] as $item1) {
                    $model->recommendations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resource'])) {
            $model->resource = resource::fromMap($map['resource']);
        }

        if (isset($map['riskType'])) {
            $model->riskType = $map['riskType'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = timeRange::fromMap($map['timeRange']);
        }

        if (isset($map['verification'])) {
            if (!empty($map['verification'])) {
                $model->verification = [];
                $n1 = 0;
                foreach ($map['verification'] as $item1) {
                    $model->verification[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
