<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachToPolicyRequest\ipPortProtocolList;
use AlibabaCloud\Tea\Model;

class AttachToPolicyRequest extends Model
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
     * @example cd8b4d70-e4e0-413a-b390-e71d********
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'ipPortProtocolList' => 'IpPortProtocolList',
        'policyId'           => 'PolicyId',
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
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachToPolicyRequest
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
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
