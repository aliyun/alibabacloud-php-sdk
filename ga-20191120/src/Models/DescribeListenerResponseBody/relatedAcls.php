<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponseBody;

use AlibabaCloud\Tea\Model;

class relatedAcls extends Model
{
    /**
     * @description The ID of the ACL that is associated with the listener.
     *
     * @example 123
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Indicates whether the access control feature is enabled. Valid values:
     *
     *   **on**: enabled
     *   **off**: disabled
     *
     * @example off
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
     * @return relatedAcls
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
