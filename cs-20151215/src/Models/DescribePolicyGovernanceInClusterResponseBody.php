<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\admitLog;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\onState;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\totalViolations;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violations;
use AlibabaCloud\Tea\Model;

class DescribePolicyGovernanceInClusterResponseBody extends Model
{
    /**
     * @description 集群当前策略治理审计日志
     *
     * @var admitLog
     */
    public $admitLog;

    /**
     * @description 当前集群中开启的不同等级策略计数统计
     *
     * @var onState[]
     */
    public $onState;

    /**
     * @description 集群中当前被拦截和告警两种处理类型下不同治理等级的违规计数。
     *
     * @var totalViolations
     */
    public $totalViolations;

    /**
     * @description 集群中针对不同策略类型的拦截和告警的审计计数统计列表
     *
     * @var violations
     */
    public $violations;
    protected $_name = [
        'admitLog'        => 'admit_log',
        'onState'         => 'on_state',
        'totalViolations' => 'totalViolations',
        'violations'      => 'violations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->admitLog) {
            $res['admit_log'] = null !== $this->admitLog ? $this->admitLog->toMap() : null;
        }
        if (null !== $this->onState) {
            $res['on_state'] = [];
            if (null !== $this->onState && \is_array($this->onState)) {
                $n = 0;
                foreach ($this->onState as $item) {
                    $res['on_state'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalViolations) {
            $res['totalViolations'] = null !== $this->totalViolations ? $this->totalViolations->toMap() : null;
        }
        if (null !== $this->violations) {
            $res['violations'] = null !== $this->violations ? $this->violations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyGovernanceInClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['admit_log'])) {
            $model->admitLog = admitLog::fromMap($map['admit_log']);
        }
        if (isset($map['on_state'])) {
            if (!empty($map['on_state'])) {
                $model->onState = [];
                $n              = 0;
                foreach ($map['on_state'] as $item) {
                    $model->onState[$n++] = null !== $item ? onState::fromMap($item) : $item;
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
