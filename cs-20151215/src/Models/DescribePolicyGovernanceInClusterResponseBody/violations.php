<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violations\deny;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violations\warn;
use AlibabaCloud\Tea\Model;

class violations extends Model
{
    /**
     * @var deny
     */
    public $deny;

    /**
     * @var warn
     */
    public $warn;
    protected $_name = [
        'deny' => 'deny',
        'warn' => 'warn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deny) {
            $res['deny'] = null !== $this->deny ? $this->deny->toMap() : null;
        }
        if (null !== $this->warn) {
            $res['warn'] = null !== $this->warn ? $this->warn->toMap() : null;
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
        if (isset($map['deny'])) {
            $model->deny = deny::fromMap($map['deny']);
        }
        if (isset($map['warn'])) {
            $model->warn = warn::fromMap($map['warn']);
        }

        return $model;
    }
}
