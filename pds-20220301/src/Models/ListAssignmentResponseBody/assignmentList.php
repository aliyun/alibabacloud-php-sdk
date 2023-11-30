<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\ListAssignmentResponseBody;

use AlibabaCloud\SDK\Pds\V20220301\Models\Identity;
use AlibabaCloud\Tea\Model;

class assignmentList extends Model
{
    /**
     * @description The time when the role was assigned. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1622682267564
     *
     * @var int
     */
    public $createdAt;

    /**
     * @description The ID of the user who assigned the role.
     *
     * @example 216***c83
     *
     * @var string
     */
    public $creator;

    /**
     * @description The domain ID.
     *
     * @example hz1
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The identity to whom the role is assigned, which is a user or a group.
     *
     * @var Identity
     */
    public $identity;

    /**
     * @description The ID of the managed resource, such as a group ID.
     *
     * @example 105***b82
     *
     * @var string
     */
    public $manageResourceId;

    /**
     * @description The type of the managed resource. For example, a value of RT_Group indicates group.
     *
     * @example RT_Group
     *
     * @var string
     */
    public $manageResourceType;

    /**
     * @description The ID of the role assigned to the identity.
     *
     * @example SystemGroupAdmin
     *
     * @var string
     */
    public $roleId;
    protected $_name = [
        'createdAt'          => 'created_at',
        'creator'            => 'creator',
        'domainId'           => 'domain_id',
        'identity'           => 'identity',
        'manageResourceId'   => 'manage_resource_id',
        'manageResourceType' => 'manage_resource_type',
        'roleId'             => 'role_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toMap() : null;
        }
        if (null !== $this->manageResourceId) {
            $res['manage_resource_id'] = $this->manageResourceId;
        }
        if (null !== $this->manageResourceType) {
            $res['manage_resource_type'] = $this->manageResourceType;
        }
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignmentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }
        if (isset($map['manage_resource_id'])) {
            $model->manageResourceId = $map['manage_resource_id'];
        }
        if (isset($map['manage_resource_type'])) {
            $model->manageResourceType = $map['manage_resource_type'];
        }
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }

        return $model;
    }
}
