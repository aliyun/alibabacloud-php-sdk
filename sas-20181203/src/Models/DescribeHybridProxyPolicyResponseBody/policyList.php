<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyPolicyResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyPolicyResponseBody\policyList\info;
use AlibabaCloud\Tea\Model;

class policyList extends Model
{
    /**
     * @description The information about the policy.
     *
     * @var info[]
     */
    public $info;

    /**
     * @description The type of the policy. Valid values:
     *
     *   **limitFrequency**
     *   **limitBandWidth**
     *
     * @example limitBandWidth
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'info' => 'Info',
        'policyType' => 'PolicyType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = [];
            if (null !== $this->info && \is_array($this->info)) {
                $n = 0;
                foreach ($this->info as $item) {
                    $res['Info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            if (!empty($map['Info'])) {
                $model->info = [];
                $n = 0;
                foreach ($map['Info'] as $item) {
                    $model->info[$n++] = null !== $item ? info::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
