<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\aclConfig;

use AlibabaCloud\Tea\Model;

class aclRelations extends Model
{
    /**
     * @description The ID of the ACL that is associated with the listener.
     *
     * @example acl-doc****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Indicates whether the ACL is associated with the listener. Valid values:
     *
     *   **Associating**
     *   **Associated**
     *   **Dissociating**
     *
     * @example Associating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aclId'  => 'AclId',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
