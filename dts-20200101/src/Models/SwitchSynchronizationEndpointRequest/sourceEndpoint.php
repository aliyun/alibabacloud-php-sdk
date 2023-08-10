<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\SwitchSynchronizationEndpointRequest;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the source instance belongs. You must specify this parameter only if the source instance and the destination instance belong to different Alibaba Cloud accounts.
     *
     * @example 14069264****
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description The authorized Resource Access Management (RAM) role of the source instance. You must specify the RAM role only if the source instance and the destination instance belong to different Alibaba Cloud accounts. You can use the RAM role to allow the Alibaba Cloud account that owns the destination instance to access the source instance.
     *
     * >  For information about the permissions and authorization methods of the RAM role, see [Configure RAM authorization for cross-account data migration and synchronization](~~48468~~).
     * @example ram-for-dts
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'ownerID' => 'OwnerID',
        'role'    => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
