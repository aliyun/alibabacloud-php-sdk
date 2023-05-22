<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\violation;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\violation\violations\deny;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\violation\violations\warn;
use AlibabaCloud\Tea\Model;

class violations extends Model
{
    /**
     * @description The information about the deployments that are blocked.
     *
     * @var deny[]
     */
    public $deny;

    /**
     * @description The information about the deployments that have triggered alerting.
     *
     * @var warn[]
     */
    public $warn;
    protected $_name = [
        'deny' => 'Deny',
        'warn' => 'Warn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deny) {
            $res['Deny'] = [];
            if (null !== $this->deny && \is_array($this->deny)) {
                $n = 0;
                foreach ($this->deny as $item) {
                    $res['Deny'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->warn) {
            $res['Warn'] = [];
            if (null !== $this->warn && \is_array($this->warn)) {
                $n = 0;
                foreach ($this->warn as $item) {
                    $res['Warn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return violations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deny'])) {
            if (!empty($map['Deny'])) {
                $model->deny = [];
                $n           = 0;
                foreach ($map['Deny'] as $item) {
                    $model->deny[$n++] = null !== $item ? deny::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Warn'])) {
            if (!empty($map['Warn'])) {
                $model->warn = [];
                $n           = 0;
                foreach ($map['Warn'] as $item) {
                    $model->warn[$n++] = null !== $item ? warn::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
