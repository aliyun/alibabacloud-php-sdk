<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Role extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $isPredefined;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $rolePrincipal;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $updatedBy;

    /**
     * @var User[]
     */
    public $users;
    protected $_name = [
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'description' => 'description',
        'displayName' => 'displayName',
        'isPredefined' => 'isPredefined',
        'roleName' => 'roleName',
        'rolePrincipal' => 'rolePrincipal',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
        'users' => 'users',
    ];

    public function validate()
    {
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->isPredefined) {
            $res['isPredefined'] = $this->isPredefined;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        if (null !== $this->rolePrincipal) {
            $res['rolePrincipal'] = $this->rolePrincipal;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['users'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['isPredefined'])) {
            $model->isPredefined = $map['isPredefined'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        if (isset($map['rolePrincipal'])) {
            $model->rolePrincipal = $map['rolePrincipal'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        if (isset($map['users'])) {
            if (!empty($map['users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['users'] as $item1) {
                    $model->users[$n1] = User::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
