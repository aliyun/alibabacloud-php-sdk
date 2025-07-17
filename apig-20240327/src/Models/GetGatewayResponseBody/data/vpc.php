<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Tea\Model;

class vpc extends Model
{
    /**
     * @description The VPC name.
     *
     * @example HangzhouVPC
     *
     * @var string
     */
    public $name;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1llj52lvj6xc***
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'name' => 'name',
        'vpcId' => 'vpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
