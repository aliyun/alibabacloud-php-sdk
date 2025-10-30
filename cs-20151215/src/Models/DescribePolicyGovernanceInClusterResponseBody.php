<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\admitLog;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\onState;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violation;

class DescribePolicyGovernanceInClusterResponseBody extends Model
{
    /**
     * @var violation
     */
    public $violation;

    /**
     * @var admitLog
     */
    public $admitLog;

    /**
     * @var onState[]
     */
    public $onState;
    protected $_name = [
        'violation' => 'Violation',
        'admitLog' => 'admit_log',
        'onState' => 'on_state',
    ];

    public function validate()
    {
        if (null !== $this->violation) {
            $this->violation->validate();
        }
        if (null !== $this->admitLog) {
            $this->admitLog->validate();
        }
        if (\is_array($this->onState)) {
            Model::validateArray($this->onState);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->violation) {
            $res['Violation'] = null !== $this->violation ? $this->violation->toArray($noStream) : $this->violation;
        }

        if (null !== $this->admitLog) {
            $res['admit_log'] = null !== $this->admitLog ? $this->admitLog->toArray($noStream) : $this->admitLog;
        }

        if (null !== $this->onState) {
            if (\is_array($this->onState)) {
                $res['on_state'] = [];
                $n1 = 0;
                foreach ($this->onState as $item1) {
                    $res['on_state'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Violation'])) {
            $model->violation = violation::fromMap($map['Violation']);
        }

        if (isset($map['admit_log'])) {
            $model->admitLog = admitLog::fromMap($map['admit_log']);
        }

        if (isset($map['on_state'])) {
            if (!empty($map['on_state'])) {
                $model->onState = [];
                $n1 = 0;
                foreach ($map['on_state'] as $item1) {
                    $model->onState[$n1] = onState::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
