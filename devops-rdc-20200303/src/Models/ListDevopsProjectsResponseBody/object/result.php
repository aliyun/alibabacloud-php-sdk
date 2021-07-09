<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectsResponseBody\object;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $logo;

    /**
     * @var bool
     */
    public $isStar;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var int
     */
    public $membersCount;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var bool
     */
    public $isTemplate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $created;

    /**
     * @var bool
     */
    public $isArchived;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $isPublic;

    /**
     * @var int
     */
    public $tasksCount;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'logo'           => 'Logo',
        'isStar'         => 'IsStar',
        'creatorId'      => 'CreatorId',
        'membersCount'   => 'MembersCount',
        'organizationId' => 'OrganizationId',
        'visibility'     => 'Visibility',
        'isTemplate'     => 'IsTemplate',
        'description'    => 'Description',
        'updated'        => 'Updated',
        'created'        => 'Created',
        'isArchived'     => 'IsArchived',
        'name'           => 'Name',
        'isPublic'       => 'IsPublic',
        'tasksCount'     => 'TasksCount',
        'roleId'         => 'RoleId',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logo) {
            $res['Logo'] = $this->logo;
        }
        if (null !== $this->isStar) {
            $res['IsStar'] = $this->isStar;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->membersCount) {
            $res['MembersCount'] = $this->membersCount;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->isTemplate) {
            $res['IsTemplate'] = $this->isTemplate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->isArchived) {
            $res['IsArchived'] = $this->isArchived;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }
        if (null !== $this->tasksCount) {
            $res['TasksCount'] = $this->tasksCount;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logo'])) {
            $model->logo = $map['Logo'];
        }
        if (isset($map['IsStar'])) {
            $model->isStar = $map['IsStar'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['MembersCount'])) {
            $model->membersCount = $map['MembersCount'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['IsTemplate'])) {
            $model->isTemplate = $map['IsTemplate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['IsArchived'])) {
            $model->isArchived = $map['IsArchived'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }
        if (isset($map['TasksCount'])) {
            $model->tasksCount = $map['TasksCount'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
