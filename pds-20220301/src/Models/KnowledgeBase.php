<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class KnowledgeBase extends Model
{
    /**
     * @var string
     */
    public $coverUri;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileFilter;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var LinkRule[]
     */
    public $linkRuleList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'coverUri' => 'cover_uri',
        'createdAt' => 'created_at',
        'description' => 'description',
        'fileFilter' => 'file_filter',
        'knowledgeBaseId' => 'knowledge_base_id',
        'linkRuleList' => 'link_rule_list',
        'name' => 'name',
        'ownerId' => 'owner_id',
        'ownerName' => 'owner_name',
        'ownerType' => 'owner_type',
        'updatedAt' => 'updated_at',
    ];

    public function validate()
    {
        if (\is_array($this->linkRuleList)) {
            Model::validateArray($this->linkRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverUri) {
            $res['cover_uri'] = $this->coverUri;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->fileFilter) {
            $res['file_filter'] = $this->fileFilter;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['knowledge_base_id'] = $this->knowledgeBaseId;
        }

        if (null !== $this->linkRuleList) {
            if (\is_array($this->linkRuleList)) {
                $res['link_rule_list'] = [];
                $n1 = 0;
                foreach ($this->linkRuleList as $item1) {
                    $res['link_rule_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['owner_id'] = $this->ownerId;
        }

        if (null !== $this->ownerName) {
            $res['owner_name'] = $this->ownerName;
        }

        if (null !== $this->ownerType) {
            $res['owner_type'] = $this->ownerType;
        }

        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
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
        if (isset($map['cover_uri'])) {
            $model->coverUri = $map['cover_uri'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['file_filter'])) {
            $model->fileFilter = $map['file_filter'];
        }

        if (isset($map['knowledge_base_id'])) {
            $model->knowledgeBaseId = $map['knowledge_base_id'];
        }

        if (isset($map['link_rule_list'])) {
            if (!empty($map['link_rule_list'])) {
                $model->linkRuleList = [];
                $n1 = 0;
                foreach ($map['link_rule_list'] as $item1) {
                    $model->linkRuleList[$n1++] = LinkRule::fromMap($item1);
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['owner_id'])) {
            $model->ownerId = $map['owner_id'];
        }

        if (isset($map['owner_name'])) {
            $model->ownerName = $map['owner_name'];
        }

        if (isset($map['owner_type'])) {
            $model->ownerType = $map['owner_type'];
        }

        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
