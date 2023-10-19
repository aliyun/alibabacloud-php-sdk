<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\File\investigationInfo;
use AlibabaCloud\Tea\Model;

class File extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $contentHash;

    /**
     * @var string
     */
    public $contentHashName;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $crc64Hash;

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
    public $domainId;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileExtension;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var bool
     */
    public $hidden;

    /**
     * @var investigationInfo
     */
    public $investigationInfo;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $localCreatedAt;

    /**
     * @var string
     */
    public $localModifiedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentFileId;

    /**
     * @var string
     */
    public $revisionId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var bool
     */
    public $starred;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var string[]
     */
    public $thumbnailUrls;

    /**
     * @var string
     */
    public $trashedAt;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var string[]
     */
    public $userTags;

    /**
     * @var VideoMediaMetadata
     */
    public $videoMediaMetadata;
    protected $_name = [
        'category'           => 'category',
        'contentHash'        => 'content_hash',
        'contentHashName'    => 'content_hash_name',
        'contentType'        => 'content_type',
        'crc64Hash'          => 'crc64_hash',
        'createdAt'          => 'created_at',
        'description'        => 'description',
        'domainId'           => 'domain_id',
        'downloadUrl'        => 'download_url',
        'driveId'            => 'drive_id',
        'fileExtension'      => 'file_extension',
        'fileId'             => 'file_id',
        'hidden'             => 'hidden',
        'investigationInfo'  => 'investigation_info',
        'labels'             => 'labels',
        'localCreatedAt'     => 'local_created_at',
        'localModifiedAt'    => 'local_modified_at',
        'name'               => 'name',
        'parentFileId'       => 'parent_file_id',
        'revisionId'         => 'revision_id',
        'size'               => 'size',
        'starred'            => 'starred',
        'status'             => 'status',
        'thumbnail'          => 'thumbnail',
        'thumbnailUrls'      => 'thumbnail_urls',
        'trashedAt'          => 'trashed_at',
        'type'               => 'type',
        'updatedAt'          => 'updated_at',
        'uploadId'           => 'upload_id',
        'userTags'           => 'user_tags',
        'videoMediaMetadata' => 'video_media_metadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->contentHash) {
            $res['content_hash'] = $this->contentHash;
        }
        if (null !== $this->contentHashName) {
            $res['content_hash_name'] = $this->contentHashName;
        }
        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }
        if (null !== $this->crc64Hash) {
            $res['crc64_hash'] = $this->crc64Hash;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->downloadUrl) {
            $res['download_url'] = $this->downloadUrl;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileExtension) {
            $res['file_extension'] = $this->fileExtension;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->hidden) {
            $res['hidden'] = $this->hidden;
        }
        if (null !== $this->investigationInfo) {
            $res['investigation_info'] = null !== $this->investigationInfo ? $this->investigationInfo->toMap() : null;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->localCreatedAt) {
            $res['local_created_at'] = $this->localCreatedAt;
        }
        if (null !== $this->localModifiedAt) {
            $res['local_modified_at'] = $this->localModifiedAt;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentFileId) {
            $res['parent_file_id'] = $this->parentFileId;
        }
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->starred) {
            $res['starred'] = $this->starred;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->thumbnail) {
            $res['thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->thumbnailUrls) {
            $res['thumbnail_urls'] = $this->thumbnailUrls;
        }
        if (null !== $this->trashedAt) {
            $res['trashed_at'] = $this->trashedAt;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }
        if (null !== $this->userTags) {
            $res['user_tags'] = $this->userTags;
        }
        if (null !== $this->videoMediaMetadata) {
            $res['video_media_metadata'] = null !== $this->videoMediaMetadata ? $this->videoMediaMetadata->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return File
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['content_hash'])) {
            $model->contentHash = $map['content_hash'];
        }
        if (isset($map['content_hash_name'])) {
            $model->contentHashName = $map['content_hash_name'];
        }
        if (isset($map['content_type'])) {
            $model->contentType = $map['content_type'];
        }
        if (isset($map['crc64_hash'])) {
            $model->crc64Hash = $map['crc64_hash'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['download_url'])) {
            $model->downloadUrl = $map['download_url'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_extension'])) {
            $model->fileExtension = $map['file_extension'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['hidden'])) {
            $model->hidden = $map['hidden'];
        }
        if (isset($map['investigation_info'])) {
            $model->investigationInfo = investigationInfo::fromMap($map['investigation_info']);
        }
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = $map['labels'];
            }
        }
        if (isset($map['local_created_at'])) {
            $model->localCreatedAt = $map['local_created_at'];
        }
        if (isset($map['local_modified_at'])) {
            $model->localModifiedAt = $map['local_modified_at'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parent_file_id'])) {
            $model->parentFileId = $map['parent_file_id'];
        }
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['starred'])) {
            $model->starred = $map['starred'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['thumbnail'])) {
            $model->thumbnail = $map['thumbnail'];
        }
        if (isset($map['thumbnail_urls'])) {
            $model->thumbnailUrls = $map['thumbnail_urls'];
        }
        if (isset($map['trashed_at'])) {
            $model->trashedAt = $map['trashed_at'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }
        if (isset($map['user_tags'])) {
            $model->userTags = $map['user_tags'];
        }
        if (isset($map['video_media_metadata'])) {
            $model->videoMediaMetadata = VideoMediaMetadata::fromMap($map['video_media_metadata']);
        }

        return $model;
    }
}
