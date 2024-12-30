<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class BaseFileUserPermissionResponse extends Model
{
    /**
     * @var bool
     */
    public $canAccess;

    /**
     * @var int
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
     * @example bj23
     *
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $fileFullPath;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var Identity
     */
    public $identity;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'canAccess'          => 'can_access',
        'createdAt'          => 'created_at',
        'creator'            => 'creator',
        'disinheritSubGroup' => 'disinherit_sub_group',
        'domainId'           => 'domain_id',
        'driveId'            => 'drive_id',
        'expireTime'         => 'expire_time',
        'fileFullPath'       => 'file_full_path',
        'fileId'             => 'file_id',
        'identity'           => 'identity',
        'roleId'             => 'role_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canAccess) {
            $res['can_access'] = $this->canAccess;
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
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }
        if (null !== $this->fileFullPath) {
            $res['file_full_path'] = $this->fileFullPath;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toMap() : null;
        }
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BaseFileUserPermissionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['can_access'])) {
            $model->canAccess = $map['can_access'];
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['expire_time'])) {
            $model->expireTime = $map['expire_time'];
        }
        if (isset($map['file_full_path'])) {
            $model->fileFullPath = $map['file_full_path'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }

        return $model;
    }
}
