<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class BaseAssignmentResponse extends Model
{
    /**
     * @var string
     */
    public $associatedRoleTagId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $disinheritSubGroup;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var Identity
     */
    public $identity;

    /**
     * @var string
     */
    public $manageResourceId;

    /**
     * @var string
     */
    public $manageResourceType;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'associatedRoleTagId' => 'associated_role_tag_id',
        'createdAt'           => 'created_at',
        'creator'             => 'creator',
        'disinheritSubGroup'  => 'disinherit_sub_group',
        'domainId'            => 'domain_id',
        'identity'            => 'identity',
        'manageResourceId'    => 'manage_resource_id',
        'manageResourceType'  => 'manage_resource_type',
        'roleId'              => 'role_id',
        'updatedAt'           => 'updated_at',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedRoleTagId) {
            $res['associated_role_tag_id'] = $this->associatedRoleTagId;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->disinheritSubGroup) {
            $res['disinherit_sub_group'] = $this->disinheritSubGroup;
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
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BaseAssignmentResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['associated_role_tag_id'])) {
            $model->associatedRoleTagId = $map['associated_role_tag_id'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['disinherit_sub_group'])) {
            $model->disinheritSubGroup = $map['disinherit_sub_group'];
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
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
