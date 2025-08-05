<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyControlPolicyPriorityRequest extends Model
{
    /**
     * @description The UUID of the access control policy.
     *
     * This parameter is required.
     *
     * @example 3770d603-3534-4878-b845-f00095ee5048
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The priority of the access control policy.
     *
     * This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $order;
    protected $_name = [
        'aclUuid' => 'AclUuid',
        'order' => 'Order',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyControlPolicyPriorityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        return $model;
    }
}
