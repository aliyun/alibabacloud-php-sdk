<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class KnowledgeFile extends Model
{
    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $driveName;

    /**
     * @var string
     */
    public $fileCategory;

    /**
     * @var int
     */
    public $fileCreatedAt;

    /**
     * @var string
     */
    public $fileCreatorId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var int
     */
    public $fileImageTime;

    /**
     * @var string
     */
    public $fileLastModifierId;

    /**
     * @var string
     */
    public $fileLastModifierType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileNamePath;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var int
     */
    public $fileUpdatedAt;

    /**
     * @var int
     */
    public $joinedAt;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $knowledgeCategoryId;

    /**
     * @var string
     */
    public $revisionId;
    protected $_name = [
        'creatorId' => 'creator_id',
        'driveId' => 'drive_id',
        'driveName' => 'drive_name',
        'fileCategory' => 'file_category',
        'fileCreatedAt' => 'file_created_at',
        'fileCreatorId' => 'file_creator_id',
        'fileId' => 'file_id',
        'fileImageTime' => 'file_image_time',
        'fileLastModifierId' => 'file_last_modifier_id',
        'fileLastModifierType' => 'file_last_modifier_type',
        'fileName' => 'file_name',
        'fileNamePath' => 'file_name_path',
        'fileSize' => 'file_size',
        'fileUpdatedAt' => 'file_updated_at',
        'joinedAt' => 'joined_at',
        'knowledgeBaseId' => 'knowledge_base_id',
        'knowledgeCategoryId' => 'knowledge_category_id',
        'revisionId' => 'revision_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['creator_id'] = $this->creatorId;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->driveName) {
            $res['drive_name'] = $this->driveName;
        }

        if (null !== $this->fileCategory) {
            $res['file_category'] = $this->fileCategory;
        }

        if (null !== $this->fileCreatedAt) {
            $res['file_created_at'] = $this->fileCreatedAt;
        }

        if (null !== $this->fileCreatorId) {
            $res['file_creator_id'] = $this->fileCreatorId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->fileImageTime) {
            $res['file_image_time'] = $this->fileImageTime;
        }

        if (null !== $this->fileLastModifierId) {
            $res['file_last_modifier_id'] = $this->fileLastModifierId;
        }

        if (null !== $this->fileLastModifierType) {
            $res['file_last_modifier_type'] = $this->fileLastModifierType;
        }

        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }

        if (null !== $this->fileNamePath) {
            $res['file_name_path'] = $this->fileNamePath;
        }

        if (null !== $this->fileSize) {
            $res['file_size'] = $this->fileSize;
        }

        if (null !== $this->fileUpdatedAt) {
            $res['file_updated_at'] = $this->fileUpdatedAt;
        }

        if (null !== $this->joinedAt) {
            $res['joined_at'] = $this->joinedAt;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['knowledge_base_id'] = $this->knowledgeBaseId;
        }

        if (null !== $this->knowledgeCategoryId) {
            $res['knowledge_category_id'] = $this->knowledgeCategoryId;
        }

        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
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
        if (isset($map['creator_id'])) {
            $model->creatorId = $map['creator_id'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['drive_name'])) {
            $model->driveName = $map['drive_name'];
        }

        if (isset($map['file_category'])) {
            $model->fileCategory = $map['file_category'];
        }

        if (isset($map['file_created_at'])) {
            $model->fileCreatedAt = $map['file_created_at'];
        }

        if (isset($map['file_creator_id'])) {
            $model->fileCreatorId = $map['file_creator_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['file_image_time'])) {
            $model->fileImageTime = $map['file_image_time'];
        }

        if (isset($map['file_last_modifier_id'])) {
            $model->fileLastModifierId = $map['file_last_modifier_id'];
        }

        if (isset($map['file_last_modifier_type'])) {
            $model->fileLastModifierType = $map['file_last_modifier_type'];
        }

        if (isset($map['file_name'])) {
            $model->fileName = $map['file_name'];
        }

        if (isset($map['file_name_path'])) {
            $model->fileNamePath = $map['file_name_path'];
        }

        if (isset($map['file_size'])) {
            $model->fileSize = $map['file_size'];
        }

        if (isset($map['file_updated_at'])) {
            $model->fileUpdatedAt = $map['file_updated_at'];
        }

        if (isset($map['joined_at'])) {
            $model->joinedAt = $map['joined_at'];
        }

        if (isset($map['knowledge_base_id'])) {
            $model->knowledgeBaseId = $map['knowledge_base_id'];
        }

        if (isset($map['knowledge_category_id'])) {
            $model->knowledgeCategoryId = $map['knowledge_category_id'];
        }

        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }

        return $model;
    }
}
