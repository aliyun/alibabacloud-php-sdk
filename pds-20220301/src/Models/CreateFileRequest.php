<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\CreateFileRequest\partInfoList;
use AlibabaCloud\Tea\Model;

class CreateFileRequest extends Model
{
    /**
     * @example ignore
     *
     * @var string
     */
    public $checkNameMode;

    /**
     * @example 7C4A8D09CA3762AF61E59520943DC26494F8941B
     *
     * @var string
     */
    public $contentHash;

    /**
     * @example sha1
     *
     * @var string
     */
    public $contentHashName;

    /**
     * @example application/json
     *
     * @var string
     */
    public $contentType;

    /**
     * @example 重要文件
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @example false
     *
     * @var bool
     */
    public $hidden;

    /**
     * @var ImageMediaMetadata
     */
    public $imageMediaMetadata;

    /**
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $localCreatedAt;

    /**
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $localModifiedAt;

    /**
     * @example a.txt
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $parallelUpload;

    /**
     * @example fileid1
     *
     * @var string
     */
    public $parentFileId;

    /**
     * @var partInfoList[]
     */
    public $partInfoList;

    /**
     * @example 7C4A8D09CA3762AF61E59520943DC26494F89411
     *
     * @var string
     */
    public $preHash;

    /**
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @example 1024
     *
     * @var int
     */
    public $size;

    /**
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @var UserTag[]
     */
    public $userTags;

    /**
     * @var VideoMediaMetadata
     */
    public $videoMediaMetadata;
    protected $_name = [
        'checkNameMode'      => 'check_name_mode',
        'contentHash'        => 'content_hash',
        'contentHashName'    => 'content_hash_name',
        'contentType'        => 'content_type',
        'description'        => 'description',
        'driveId'            => 'drive_id',
        'fileId'             => 'file_id',
        'hidden'             => 'hidden',
        'imageMediaMetadata' => 'image_media_metadata',
        'localCreatedAt'     => 'local_created_at',
        'localModifiedAt'    => 'local_modified_at',
        'name'               => 'name',
        'parallelUpload'     => 'parallel_upload',
        'parentFileId'       => 'parent_file_id',
        'partInfoList'       => 'part_info_list',
        'preHash'            => 'pre_hash',
        'shareId'            => 'share_id',
        'size'               => 'size',
        'type'               => 'type',
        'userTags'           => 'user_tags',
        'videoMediaMetadata' => 'video_media_metadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkNameMode) {
            $res['check_name_mode'] = $this->checkNameMode;
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->hidden) {
            $res['hidden'] = $this->hidden;
        }
        if (null !== $this->imageMediaMetadata) {
            $res['image_media_metadata'] = null !== $this->imageMediaMetadata ? $this->imageMediaMetadata->toMap() : null;
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
        if (null !== $this->parallelUpload) {
            $res['parallel_upload'] = $this->parallelUpload;
        }
        if (null !== $this->parentFileId) {
            $res['parent_file_id'] = $this->parentFileId;
        }
        if (null !== $this->partInfoList) {
            $res['part_info_list'] = [];
            if (null !== $this->partInfoList && \is_array($this->partInfoList)) {
                $n = 0;
                foreach ($this->partInfoList as $item) {
                    $res['part_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preHash) {
            $res['pre_hash'] = $this->preHash;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userTags) {
            $res['user_tags'] = [];
            if (null !== $this->userTags && \is_array($this->userTags)) {
                $n = 0;
                foreach ($this->userTags as $item) {
                    $res['user_tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoMediaMetadata) {
            $res['video_media_metadata'] = null !== $this->videoMediaMetadata ? $this->videoMediaMetadata->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_name_mode'])) {
            $model->checkNameMode = $map['check_name_mode'];
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
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
        if (isset($map['local_created_at'])) {
            $model->localCreatedAt = $map['local_created_at'];
        }
        if (isset($map['local_modified_at'])) {
            $model->localModifiedAt = $map['local_modified_at'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parallel_upload'])) {
            $model->parallelUpload = $map['parallel_upload'];
        }
        if (isset($map['parent_file_id'])) {
            $model->parentFileId = $map['parent_file_id'];
        }
        if (isset($map['part_info_list'])) {
            if (!empty($map['part_info_list'])) {
                $model->partInfoList = [];
                $n                   = 0;
                foreach ($map['part_info_list'] as $item) {
                    $model->partInfoList[$n++] = null !== $item ? partInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pre_hash'])) {
            $model->preHash = $map['pre_hash'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['user_tags'])) {
            if (!empty($map['user_tags'])) {
                $model->userTags = [];
                $n               = 0;
                foreach ($map['user_tags'] as $item) {
                    $model->userTags[$n++] = null !== $item ? UserTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['video_media_metadata'])) {
            $model->videoMediaMetadata = VideoMediaMetadata::fromMap($map['video_media_metadata']);
        }

        return $model;
    }
}
