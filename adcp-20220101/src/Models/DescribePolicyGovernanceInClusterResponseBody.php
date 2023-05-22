<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances;
use AlibabaCloud\Tea\Model;

class DescribePolicyGovernanceInClusterResponseBody extends Model
{
    /**
     * @description The detailed information about the policies.
     *
     * @var policyGovernances[]
     */
    public $policyGovernances;

    /**
     * @description The request ID.
     *
     * @example 96C6A284-0EC3-5486-9A97-E8E9EE27E9EF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyGovernances' => 'PolicyGovernances',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyGovernances) {
            $res['PolicyGovernances'] = [];
            if (null !== $this->policyGovernances && \is_array($this->policyGovernances)) {
                $n = 0;
                foreach ($this->policyGovernances as $item) {
                    $res['PolicyGovernances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PolicyGovernances'])) {
            if (!empty($map['PolicyGovernances'])) {
                $model->policyGovernances = [];
                $n                        = 0;
                foreach ($map['PolicyGovernances'] as $item) {
                    $model->policyGovernances[$n++] = null !== $item ? policyGovernances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
