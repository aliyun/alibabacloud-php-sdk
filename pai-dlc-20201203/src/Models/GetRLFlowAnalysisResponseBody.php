<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetRLFlowAnalysisResponseBody extends Model
{
    /**
     * @var bool
     */
    public $found;

    /**
     * @var RLFlowFunnelStage[]
     */
    public $funnel;

    /**
     * @var RLFlowMilestoneCount[]
     */
    public $inflightByMilestone;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $megaStepOffset;

    /**
     * @var int
     */
    public $nowMs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var RLFlowSankey
     */
    public $sankey;

    /**
     * @var string
     */
    public $stepSource;

    /**
     * @var RLFlowStep[]
     */
    public $steps;

    /**
     * @var RLFlowStuckItem[]
     */
    public $stuck;

    /**
     * @var RLFlowTotals
     */
    public $totals;

    /**
     * @var RLFlowTransition[]
     */
    public $transitions;

    /**
     * @var RLFlowTurns
     */
    public $turns;

    /**
     * @var RLFlowWaste
     */
    public $waste;
    protected $_name = [
        'found' => 'Found',
        'funnel' => 'Funnel',
        'inflightByMilestone' => 'InflightByMilestone',
        'jobId' => 'JobId',
        'megaStepOffset' => 'MegaStepOffset',
        'nowMs' => 'NowMs',
        'requestId' => 'RequestId',
        'sankey' => 'Sankey',
        'stepSource' => 'StepSource',
        'steps' => 'Steps',
        'stuck' => 'Stuck',
        'totals' => 'Totals',
        'transitions' => 'Transitions',
        'turns' => 'Turns',
        'waste' => 'Waste',
    ];

    public function validate()
    {
        if (\is_array($this->funnel)) {
            Model::validateArray($this->funnel);
        }
        if (\is_array($this->inflightByMilestone)) {
            Model::validateArray($this->inflightByMilestone);
        }
        if (null !== $this->sankey) {
            $this->sankey->validate();
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        if (\is_array($this->stuck)) {
            Model::validateArray($this->stuck);
        }
        if (null !== $this->totals) {
            $this->totals->validate();
        }
        if (\is_array($this->transitions)) {
            Model::validateArray($this->transitions);
        }
        if (null !== $this->turns) {
            $this->turns->validate();
        }
        if (null !== $this->waste) {
            $this->waste->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->found) {
            $res['Found'] = $this->found;
        }

        if (null !== $this->funnel) {
            if (\is_array($this->funnel)) {
                $res['Funnel'] = [];
                $n1 = 0;
                foreach ($this->funnel as $item1) {
                    $res['Funnel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inflightByMilestone) {
            if (\is_array($this->inflightByMilestone)) {
                $res['InflightByMilestone'] = [];
                $n1 = 0;
                foreach ($this->inflightByMilestone as $item1) {
                    $res['InflightByMilestone'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->megaStepOffset) {
            $res['MegaStepOffset'] = $this->megaStepOffset;
        }

        if (null !== $this->nowMs) {
            $res['NowMs'] = $this->nowMs;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sankey) {
            $res['Sankey'] = null !== $this->sankey ? $this->sankey->toArray($noStream) : $this->sankey;
        }

        if (null !== $this->stepSource) {
            $res['StepSource'] = $this->stepSource;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['Steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['Steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stuck) {
            if (\is_array($this->stuck)) {
                $res['Stuck'] = [];
                $n1 = 0;
                foreach ($this->stuck as $item1) {
                    $res['Stuck'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totals) {
            $res['Totals'] = null !== $this->totals ? $this->totals->toArray($noStream) : $this->totals;
        }

        if (null !== $this->transitions) {
            if (\is_array($this->transitions)) {
                $res['Transitions'] = [];
                $n1 = 0;
                foreach ($this->transitions as $item1) {
                    $res['Transitions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->turns) {
            $res['Turns'] = null !== $this->turns ? $this->turns->toArray($noStream) : $this->turns;
        }

        if (null !== $this->waste) {
            $res['Waste'] = null !== $this->waste ? $this->waste->toArray($noStream) : $this->waste;
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
        if (isset($map['Found'])) {
            $model->found = $map['Found'];
        }

        if (isset($map['Funnel'])) {
            if (!empty($map['Funnel'])) {
                $model->funnel = [];
                $n1 = 0;
                foreach ($map['Funnel'] as $item1) {
                    $model->funnel[$n1] = RLFlowFunnelStage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InflightByMilestone'])) {
            if (!empty($map['InflightByMilestone'])) {
                $model->inflightByMilestone = [];
                $n1 = 0;
                foreach ($map['InflightByMilestone'] as $item1) {
                    $model->inflightByMilestone[$n1] = RLFlowMilestoneCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['MegaStepOffset'])) {
            $model->megaStepOffset = $map['MegaStepOffset'];
        }

        if (isset($map['NowMs'])) {
            $model->nowMs = $map['NowMs'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sankey'])) {
            $model->sankey = RLFlowSankey::fromMap($map['Sankey']);
        }

        if (isset($map['StepSource'])) {
            $model->stepSource = $map['StepSource'];
        }

        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['Steps'] as $item1) {
                    $model->steps[$n1] = RLFlowStep::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Stuck'])) {
            if (!empty($map['Stuck'])) {
                $model->stuck = [];
                $n1 = 0;
                foreach ($map['Stuck'] as $item1) {
                    $model->stuck[$n1] = RLFlowStuckItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Totals'])) {
            $model->totals = RLFlowTotals::fromMap($map['Totals']);
        }

        if (isset($map['Transitions'])) {
            if (!empty($map['Transitions'])) {
                $model->transitions = [];
                $n1 = 0;
                foreach ($map['Transitions'] as $item1) {
                    $model->transitions[$n1] = RLFlowTransition::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Turns'])) {
            $model->turns = RLFlowTurns::fromMap($map['Turns']);
        }

        if (isset($map['Waste'])) {
            $model->waste = RLFlowWaste::fromMap($map['Waste']);
        }

        return $model;
    }
}
