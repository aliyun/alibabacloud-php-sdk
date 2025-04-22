<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class AlbumFile extends Model
{
    /**
     * @var string
     */
    public $albumId;

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
     * @var mixed[]
     */
    public $exFieldsInfo;

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
     * @var ImageMediaMetadata
     */
    public $imageMediaMetadata;

    /**
     * @var InvestigationInfo
     */
    public $investigationInfo;

    /**
     * @var int
     */
    public $joinedAt;

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
    public $mimeType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectUri;

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
    public $transhedAt;

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
     * @var string
     */
    public $userMeta;
    protected $_name = [
        'albumId' => 'album_id',
        'category' => 'category',
        'contentHash' => 'content_hash',
        'contentHashName' => 'content_hash_name',
        'contentType' => 'content_type',
        'crc64Hash' => 'crc64_hash',
        'createdAt' => 'created_at',
        'description' => 'description',
        'domainId' => 'domain_id',
        'downloadUrl' => 'download_url',
        'driveId' => 'drive_id',
        'exFieldsInfo' => 'ex_fields_info',
        'fileExtension' => 'file_extension',
        'fileId' => 'file_id',
        'hidden' => 'hidden',
        'imageMediaMetadata' => 'image_media_metadata',
        'investigationInfo' => 'investigation_info',
        'joinedAt' => 'joined_at',
        'labels' => 'labels',
        'localCreatedAt' => 'local_created_at',
        'localModifiedAt' => 'local_modified_at',
        'mimeType' => 'mime_type',
        'name' => 'name',
        'objectUri' => 'object_uri',
        'parentFileId' => 'parent_file_id',
        'revisionId' => 'revision_id',
        'size' => 'size',
        'starred' => 'starred',
        'status' => 'status',
        'thumbnail' => 'thumbnail',
        'thumbnailUrls' => 'thumbnail_urls',
        'transhedAt' => 'transhed_at',
        'type' => 'type',
        'updatedAt' => 'updated_at',
        'uploadId' => 'upload_id',
        'userMeta' => 'user_meta',
    ];

    public function validate()
    {
        if (\is_array($this->exFieldsInfo)) {
            Model::validateArray($this->exFieldsInfo);
        }
        if (null !== $this->imageMediaMetadata) {
            $this->imageMediaMetadata->validate();
        }
        if (null !== $this->investigationInfo) {
            $this->investigationInfo->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->thumbnailUrls)) {
            Model::validateArray($this->thumbnailUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albumId) {
            $res['album_id'] = $this->albumId;
        }

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

        if (null !== $this->exFieldsInfo) {
            if (\is_array($this->exFieldsInfo)) {
                $res['ex_fields_info'] = [];
                foreach ($this->exFieldsInfo as $key1 => $value1) {
                    $res['ex_fields_info'][$key1] = $value1;
                }
            }
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

        if (null !== $this->imageMediaMetadata) {
            $res['image_media_metadata'] = null !== $this->imageMediaMetadata ? $this->imageMediaMetadata->toArray($noStream) : $this->imageMediaMetadata;
        }

        if (null !== $this->investigationInfo) {
            $res['investigation_info'] = null !== $this->investigationInfo ? $this->investigationInfo->toArray($noStream) : $this->investigationInfo;
        }

        if (null !== $this->joinedAt) {
            $res['joined_at'] = $this->joinedAt;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['labels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->localCreatedAt) {
            $res['local_created_at'] = $this->localCreatedAt;
        }

        if (null !== $this->localModifiedAt) {
            $res['local_modified_at'] = $this->localModifiedAt;
        }

        if (null !== $this->mimeType) {
            $res['mime_type'] = $this->mimeType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->objectUri) {
            $res['object_uri'] = $this->objectUri;
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
            if (\is_array($this->thumbnailUrls)) {
                $res['thumbnail_urls'] = [];
                foreach ($this->thumbnailUrls as $key1 => $value1) {
                    $res['thumbnail_urls'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->transhedAt) {
            $res['transhed_at'] = $this->transhedAt;
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

        if (null !== $this->userMeta) {
            $res['user_meta'] = $this->userMeta;
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
        if (isset($map['album_id'])) {
            $model->albumId = $map['album_id'];
        }

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

        if (isset($map['ex_fields_info'])) {
            if (!empty($map['ex_fields_info'])) {
                $model->exFieldsInfo = [];
                foreach ($map['ex_fields_info'] as $key1 => $value1) {
                    $model->exFieldsInfo[$key1] = $value1;
                }
            }
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

        if (isset($map['image_media_metadata'])) {
            $model->imageMediaMetadata = ImageMediaMetadata::fromMap($map['image_media_metadata']);
        }

        if (isset($map['investigation_info'])) {
            $model->investigationInfo = InvestigationInfo::fromMap($map['investigation_info']);
        }

        if (isset($map['joined_at'])) {
            $model->joinedAt = $map['joined_at'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['labels'] as $item1) {
                    $model->labels[$n1++] = $item1;
                }
            }
        }

        if (isset($map['local_created_at'])) {
            $model->localCreatedAt = $map['local_created_at'];
        }

        if (isset($map['local_modified_at'])) {
            $model->localModifiedAt = $map['local_modified_at'];
        }

        if (isset($map['mime_type'])) {
            $model->mimeType = $map['mime_type'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['object_uri'])) {
            $model->objectUri = $map['object_uri'];
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
            if (!empty($map['thumbnail_urls'])) {
                $model->thumbnailUrls = [];
                foreach ($map['thumbnail_urls'] as $key1 => $value1) {
                    $model->thumbnailUrls[$key1] = $value1;
                }
            }
        }

        if (isset($map['transhed_at'])) {
            $model->transhedAt = $map['transhed_at'];
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

        if (isset($map['user_meta'])) {
            $model->userMeta = $map['user_meta'];
        }

        return $model;
    }
}
