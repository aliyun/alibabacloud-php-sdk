<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateSkillResponseBody;

use AlibabaCloud\Dara\Model;

class skill extends Model
{
    /**
     * @var string
     */
    public $activeVersionId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createdAt;

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
    public $icon;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'activeVersionId' => 'ActiveVersionId',
        'category' => 'Category',
        'createdAt' => 'CreatedAt',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'icon' => 'Icon',
        'id' => 'Id',
        'isDeleted' => 'IsDeleted',
        'scope' => 'Scope',
        'slug' => 'Slug',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeVersionId) {
            $res['ActiveVersionId'] = $this->activeVersionId;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['ActiveVersionId'])) {
            $model->activeVersionId = $map['ActiveVersionId'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
