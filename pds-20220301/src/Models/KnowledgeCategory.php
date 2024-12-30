<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class KnowledgeCategory extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $knowledgeBaseName;

    /**
     * @var string
     */
    public $knowledgeCategoryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string
     */
    public $parentKnowledgeCategoryId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt'                 => 'created_at',
        'description'               => 'description',
        'keywords'                  => 'keywords',
        'knowledgeBaseId'           => 'knowledge_base_id',
        'knowledgeBaseName'         => 'knowledge_base_name',
        'knowledgeCategoryId'       => 'knowledge_category_id',
        'name'                      => 'name',
        'owner'                     => 'owner',
        'ownerType'                 => 'owner_type',
        'parentKnowledgeCategoryId' => 'parent_knowledge_category_id',
        'status'                    => 'status',
        'updatedAt'                 => 'updated_at',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->keywords) {
            $res['keywords'] = $this->keywords;
        }
        if (null !== $this->knowledgeBaseId) {
            $res['knowledge_base_id'] = $this->knowledgeBaseId;
        }
        if (null !== $this->knowledgeBaseName) {
            $res['knowledge_base_name'] = $this->knowledgeBaseName;
        }
        if (null !== $this->knowledgeCategoryId) {
            $res['knowledge_category_id'] = $this->knowledgeCategoryId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->ownerType) {
            $res['owner_type'] = $this->ownerType;
        }
        if (null !== $this->parentKnowledgeCategoryId) {
            $res['parent_knowledge_category_id'] = $this->parentKnowledgeCategoryId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KnowledgeCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['keywords'])) {
            if (!empty($map['keywords'])) {
                $model->keywords = $map['keywords'];
            }
        }
        if (isset($map['knowledge_base_id'])) {
            $model->knowledgeBaseId = $map['knowledge_base_id'];
        }
        if (isset($map['knowledge_base_name'])) {
            $model->knowledgeBaseName = $map['knowledge_base_name'];
        }
        if (isset($map['knowledge_category_id'])) {
            $model->knowledgeCategoryId = $map['knowledge_category_id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['owner_type'])) {
            $model->ownerType = $map['owner_type'];
        }
        if (isset($map['parent_knowledge_category_id'])) {
            $model->parentKnowledgeCategoryId = $map['parent_knowledge_category_id'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
