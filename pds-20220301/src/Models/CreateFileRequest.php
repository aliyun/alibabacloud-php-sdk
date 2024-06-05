<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\CreateFileRequest\partInfoList;
use AlibabaCloud\Tea\Model;

class CreateFileRequest extends Model
{
    /**
     * @description The processing method that is used if the file that you want to create has the same name as an existing file in the cloud. Valid values:
     *
     * Default value: ignore.
     * @example ignore
     *
     * @var string
     */
    public $checkNameMode;

    /**
     * @description The hash value of the file content. The value is calculated based on the algorithm specified by content_hash_name.
     *
     * @example 7C4A8D09CA3762AF61E59520943DC26494F8941B
     *
     * @var string
     */
    public $contentHash;

    /**
     * @description The name of the algorithm that is used to calculate the hash value of the file content. Only SHA1 is supported.
     *
     * @example sha1
     *
     * @var string
     */
    public $contentHashName;

    /**
     * @description The type of the file content. Default value: application/oct-stream.
     *
     * @example application/json
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The description of the file. The description can be up to 1,024 characters in length. By default, this parameter is left empty.
     *
     * @example 重要文件
     *
     * @var string
     */
    public $description;

    /**
     * @description The drive ID. This parameter is required if the file is not uploaded by using the share URL of the file.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The file ID. This parameter is required if check_name_mode is set to ignore.
     *
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @description Specifies whether to hide the file or folder. By default, the file or folder is not hidden.
     *
     * @example false
     *
     * @var bool
     */
    public $hidden;

    /**
     * @description The information about the image specified by the client.
     *
     * @var ImageMediaMetadata
     */
    public $imageMediaMetadata;

    /**
     * @description The time when the local file was created. By default, this parameter is left empty. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format based on the UTC+0 time zone.
     *
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $localCreatedAt;

    /**
     * @description The time when the local file was modified. By default, this parameter is left empty. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format based on the UTC+0 time zone.
     *
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $localModifiedAt;

    /**
     * @description The name of the file. The name can be up to 1,024 bytes in length based on the UTF-8 encoding rule and cannot end with a forward slash (/).
     *
     * This parameter is required.
     * @example a.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to enable the parallel upload feature.
     *
     * @example true
     *
     * @var bool
     */
    public $parallelUpload;

    /**
     * @description The ID of the parent directory. If you want to create a file or folder in the root directory, set this parameter to root.
     *
     * This parameter is required.
     * @example fileid1
     *
     * @var string
     */
    public $parentFileId;

    /**
     * @description The information about the file parts. You can specify up to 10,000 parts. By default, if you do not specify this parameter, only one part is returned.
     *
     * @var partInfoList[]
     */
    public $partInfoList;

    /**
     * @description The SHA-1 hash value of the first 1 KB data of the file. This parameter is required if you perform instant file upload by using the pre-hashing feature. If the SHA-1 hash value is not matched on the cloud, the client does not need to calculate the SHA-1 hash value of the entire file.
     *
     * @example 7C4A8D09CA3762AF61E59520943DC26494F89411
     *
     * @var string
     */
    public $preHash;

    /**
     * @description The share ID. This parameter is required if the file is uploaded by using the share URL of the file.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The size of the file. Unit: bytes.
     *
     * @example 1024
     *
     * @var int
     */
    public $size;

    /**
     * @description The type of the file. Valid values:
     *
     * This parameter is required.
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @description The custom tags. You can specify up to 1,000 tags.
     *
     * @var UserTag[]
     */
    public $userTags;

    /**
     * @description The information about the video specified by the client.
     *
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
