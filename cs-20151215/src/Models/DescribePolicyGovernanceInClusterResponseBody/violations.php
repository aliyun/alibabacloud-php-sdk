<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violations\deny;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violations\warn;

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
        if (null !== $this->deny) {
            $this->deny->validate();
        }
        if (null !== $this->warn) {
            $this->warn->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deny) {
            $res['deny'] = null !== $this->deny ? $this->deny->toArray($noStream) : $this->deny;
        }

        if (null !== $this->warn) {
            $res['warn'] = null !== $this->warn ? $this->warn->toArray($noStream) : $this->warn;
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
        if (isset($map['deny'])) {
            $model->deny = deny::fromMap($map['deny']);
        }

        if (isset($map['warn'])) {
            $model->warn = warn::fromMap($map['warn']);
        }

        return $model;
    }
}
