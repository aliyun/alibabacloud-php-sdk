<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class BaseGroupResponse extends Model
{
    /**
     * @example 111111
     *
     * @var int
     */
    public $createdAt;

    /**
     * @example system
     *
     * @var string
     */
    public $creator;

    /**
     * @example desc-111
     *
     * @var string
     */
    public $description;

    /**
     * @example bj123
     *
     * @var string
     */
    public $domainId;

    /**
     * @example b38b5681bd964950ad8bc0f8ea504793
     *
     * @var string
     */
    public $groupId;

    /**
     * @example name-111
     *
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $isSync;

    /**
     * @var IDPermission[]
     */
    public $permission;

    /**
     * @example 111111
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt'   => 'created_at',
        'creator'     => 'creator',
        'description' => 'description',
        'domainId'    => 'domain_id',
        'groupId'     => 'group_id',
        'groupName'   => 'group_name',
        'isSync'      => 'is_sync',
        'permission'  => 'permission',
        'updatedAt'   => 'updated_at',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->isSync) {
            $res['is_sync'] = $this->isSync;
        }
        if (null !== $this->permission) {
            $res['permission'] = [];
            if (null !== $this->permission && \is_array($this->permission)) {
                foreach ($this->permission as $key => $val) {
                    $res['permission'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BaseGroupResponse
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['group_id'])) {
            $model->groupId = $map['group_id'];
        }
        if (isset($map['group_name'])) {
            $model->groupName = $map['group_name'];
        }
        if (isset($map['is_sync'])) {
            $model->isSync = $map['is_sync'];
        }
        if (isset($map['permission'])) {
            $model->permission = $map['permission'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
