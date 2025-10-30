<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violation\totalViolations\deny;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violation\totalViolations\warn;

class totalViolations extends Model
{
    /**
     * @var deny[]
     */
    public $deny;

    /**
     * @var warn[]
     */
    public $warn;
    protected $_name = [
        'deny' => 'deny',
        'warn' => 'warn',
    ];

    public function validate()
    {
        if (\is_array($this->deny)) {
            Model::validateArray($this->deny);
        }
        if (\is_array($this->warn)) {
            Model::validateArray($this->warn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deny) {
            if (\is_array($this->deny)) {
                $res['deny'] = [];
                $n1 = 0;
                foreach ($this->deny as $item1) {
                    $res['deny'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->warn) {
            if (\is_array($this->warn)) {
                $res['warn'] = [];
                $n1 = 0;
                foreach ($this->warn as $item1) {
                    $res['warn'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['deny'])) {
            if (!empty($map['deny'])) {
                $model->deny = [];
                $n1 = 0;
                foreach ($map['deny'] as $item1) {
                    $model->deny[$n1] = deny::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['warn'])) {
            if (!empty($map['warn'])) {
                $model->warn = [];
                $n1 = 0;
                foreach ($map['warn'] as $item1) {
                    $model->warn[$n1] = warn::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
