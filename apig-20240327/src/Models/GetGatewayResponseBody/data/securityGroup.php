<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Tea\Model;

class securityGroup extends Model
{
    /**
     * @example APIG-sg-gw-cq7ke5ll***
     *
     * @var string
     */
    public $name;

    /**
     * @example sg-bp16tafq9***
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'name'            => 'name',
        'securityGroupId' => 'securityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        return $model;
    }
}
