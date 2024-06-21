<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DetachFromPolicyRequest\ipPortProtocolList;
use AlibabaCloud\Tea\Model;

class DetachFromPolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var ipPortProtocolList[]
     */
    public $ipPortProtocolList;

    /**
     * @description This parameter is required.
     *
     * @example l3
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'ipPortProtocolList' => 'IpPortProtocolList',
        'policyType'         => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipPortProtocolList) {
            $res['IpPortProtocolList'] = [];
            if (null !== $this->ipPortProtocolList && \is_array($this->ipPortProtocolList)) {
                $n = 0;
                foreach ($this->ipPortProtocolList as $item) {
                    $res['IpPortProtocolList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DetachFromPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpPortProtocolList'])) {
            if (!empty($map['IpPortProtocolList'])) {
                $model->ipPortProtocolList = [];
                $n                         = 0;
                foreach ($map['IpPortProtocolList'] as $item) {
                    $model->ipPortProtocolList[$n++] = null !== $item ? ipPortProtocolList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
