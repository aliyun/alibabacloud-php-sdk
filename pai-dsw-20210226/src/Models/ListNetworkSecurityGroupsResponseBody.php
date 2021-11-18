<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListNetworkSecurityGroupsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description security groups
     *
     * @var SecurityGroup[]
     */
    public $securityGroups;
    protected $_name = [
        'requestId'      => 'RequestId',
        'securityGroups' => 'SecurityGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = [];
            if (null !== $this->securityGroups && \is_array($this->securityGroups)) {
                $n = 0;
                foreach ($this->securityGroups as $item) {
                    $res['SecurityGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNetworkSecurityGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = [];
                $n                     = 0;
                foreach ($map['SecurityGroups'] as $item) {
                    $model->securityGroups[$n++] = null !== $item ? SecurityGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
