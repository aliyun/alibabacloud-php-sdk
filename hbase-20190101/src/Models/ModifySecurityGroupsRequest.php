<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityGroupsRequest extends Model
{
    /**
     * @example hb-bp16f1441y6p2kv**
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example sg-t4ng4yyc916o81nu****,sg-x4gg4dyc9d6w********
     *
     * @var string
     */
    public $securityGroupIds;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'securityGroupIds' => 'SecurityGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = $map['SecurityGroupIds'];
        }

        return $model;
    }
}
