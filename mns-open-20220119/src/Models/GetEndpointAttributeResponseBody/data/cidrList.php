<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEndpointAttributeResponseBody\data;

use AlibabaCloud\Tea\Model;

class cidrList extends Model
{
    /**
     * @description The ACL policy. Valid value:
     *
     *   **allow**: indicates that the current endpoint allows access from the corresponding CIDR block. (Only allow is supported)
     *
     * @example allow
     *
     * @var string
     */
    public $aclStrategy;

    /**
     * @description The CIDR block.
     *
     * @example 172.18.0.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the list was created.
     *
     * @example 1701951224000
     *
     * @var int
     */
    public $createTime;
    protected $_name = [
        'aclStrategy' => 'AclStrategy',
        'cidr'        => 'Cidr',
        'createTime'  => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclStrategy) {
            $res['AclStrategy'] = $this->aclStrategy;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cidrList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclStrategy'])) {
            $model->aclStrategy = $map['AclStrategy'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
