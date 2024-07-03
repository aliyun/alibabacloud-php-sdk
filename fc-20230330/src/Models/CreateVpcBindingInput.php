<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcBindingInput extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example vpc-8vb8x8dggvr0axxxxxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcBindingInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
