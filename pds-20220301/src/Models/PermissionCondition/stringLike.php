<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition;

use AlibabaCloud\Tea\Model;

class stringLike extends Model
{
    /**
     * @var string[]
     */
    public $vpcId;
    protected $_name = [
        'vpcId' => 'vpc_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['vpc_id'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stringLike
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['vpc_id'])) {
            if (!empty($map['vpc_id'])) {
                $model->vpcId = $map['vpc_id'];
            }
        }

        return $model;
    }
}
