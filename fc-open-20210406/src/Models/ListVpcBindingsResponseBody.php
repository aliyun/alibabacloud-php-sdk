<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListVpcBindingsResponseBody extends Model
{
    /**
     * @description The IDs of bound VPCs.
     *
     * @var string[]
     */
    public $vpcIds;
    protected $_name = [
        'vpcIds' => 'vpcIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcIds) {
            $res['vpcIds'] = $this->vpcIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcBindingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['vpcIds'])) {
            if (!empty($map['vpcIds'])) {
                $model->vpcIds = $map['vpcIds'];
            }
        }

        return $model;
    }
}
