<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupPolicyResponseBody\advancedDataPolicies\advancedDataPolicy;

class advancedDataPolicies extends Model
{
    /**
     * @var advancedDataPolicy[]
     */
    public $advancedDataPolicy;
    protected $_name = [
        'advancedDataPolicy' => 'AdvancedDataPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->advancedDataPolicy)) {
            Model::validateArray($this->advancedDataPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedDataPolicy) {
            if (\is_array($this->advancedDataPolicy)) {
                $res['AdvancedDataPolicy'] = [];
                $n1 = 0;
                foreach ($this->advancedDataPolicy as $item1) {
                    $res['AdvancedDataPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AdvancedDataPolicy'])) {
            if (!empty($map['AdvancedDataPolicy'])) {
                $model->advancedDataPolicy = [];
                $n1 = 0;
                foreach ($map['AdvancedDataPolicy'] as $item1) {
                    $model->advancedDataPolicy[$n1] = advancedDataPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
