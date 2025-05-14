<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\admitLog;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\onState;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\totalViolations;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violations;

class DescribePolicyGovernanceInClusterResponseBody extends Model
{
    /**
     * @var admitLog
     */
    public $admitLog;

    /**
     * @var onState[]
     */
    public $onState;

    /**
     * @var totalViolations
     */
    public $totalViolations;

    /**
     * @var violations
     */
    public $violations;
    protected $_name = [
        'admitLog' => 'admit_log',
        'onState' => 'on_state',
        'totalViolations' => 'totalViolations',
        'violations' => 'violations',
    ];

    public function validate()
    {
        if (null !== $this->admitLog) {
            $this->admitLog->validate();
        }
        if (\is_array($this->onState)) {
            Model::validateArray($this->onState);
        }
        if (null !== $this->totalViolations) {
            $this->totalViolations->validate();
        }
        if (null !== $this->violations) {
            $this->violations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->admitLog) {
            $res['admit_log'] = null !== $this->admitLog ? $this->admitLog->toArray($noStream) : $this->admitLog;
        }

        if (null !== $this->onState) {
            if (\is_array($this->onState)) {
                $res['on_state'] = [];
                $n1 = 0;
                foreach ($this->onState as $item1) {
                    $res['on_state'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalViolations) {
            $res['totalViolations'] = null !== $this->totalViolations ? $this->totalViolations->toArray($noStream) : $this->totalViolations;
        }

        if (null !== $this->violations) {
            $res['violations'] = null !== $this->violations ? $this->violations->toArray($noStream) : $this->violations;
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
        if (isset($map['admit_log'])) {
            $model->admitLog = admitLog::fromMap($map['admit_log']);
        }

        if (isset($map['on_state'])) {
            if (!empty($map['on_state'])) {
                $model->onState = [];
                $n1 = 0;
                foreach ($map['on_state'] as $item1) {
                    $model->onState[$n1++] = onState::fromMap($item1);
                }
            }
        }

        if (isset($map['totalViolations'])) {
            $model->totalViolations = totalViolations::fromMap($map['totalViolations']);
        }

        if (isset($map['violations'])) {
            $model->violations = violations::fromMap($map['violations']);
        }

        return $model;
    }
}
