<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLogBackupPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLogBackupPolicyResponseBody\advancedLogPolicies\advancedLogPolicy;

class advancedLogPolicies extends Model
{
    /**
     * @var advancedLogPolicy[]
     */
    public $advancedLogPolicy;
    protected $_name = [
        'advancedLogPolicy' => 'AdvancedLogPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->advancedLogPolicy)) {
            Model::validateArray($this->advancedLogPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedLogPolicy) {
            if (\is_array($this->advancedLogPolicy)) {
                $res['AdvancedLogPolicy'] = [];
                $n1 = 0;
                foreach ($this->advancedLogPolicy as $item1) {
                    $res['AdvancedLogPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AdvancedLogPolicy'])) {
            if (!empty($map['AdvancedLogPolicy'])) {
                $model->advancedLogPolicy = [];
                $n1 = 0;
                foreach ($map['AdvancedLogPolicy'] as $item1) {
                    $model->advancedLogPolicy[$n1] = advancedLogPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
