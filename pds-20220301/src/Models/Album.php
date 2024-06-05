<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class Album extends Model
{
    /**
     * @var string
     */
    public $albumId;

    /**
     * @var File
     */
    public $baseFaceFile;

    /**
     * @var string
     */
    public $baseFaceGroupId;

    /**
     * @var File
     */
    public $coverFile;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $fileCount;

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
    public $updatedAt;

    /**
     * @var string[]
     */
    public $userTags;
    protected $_name = [
        'albumId'         => 'album_id',
        'baseFaceFile'    => 'base_face_file',
        'baseFaceGroupId' => 'base_face_group_id',
        'coverFile'       => 'cover_file',
        'createdAt'       => 'created_at',
        'description'     => 'description',
        'fileCount'       => 'file_count',
        'name'            => 'name',
        'owner'           => 'owner',
        'updatedAt'       => 'updated_at',
        'userTags'        => 'user_tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumId) {
            $res['album_id'] = $this->albumId;
        }
        if (null !== $this->baseFaceFile) {
            $res['base_face_file'] = null !== $this->baseFaceFile ? $this->baseFaceFile->toMap() : null;
        }
        if (null !== $this->baseFaceGroupId) {
            $res['base_face_group_id'] = $this->baseFaceGroupId;
        }
        if (null !== $this->coverFile) {
            $res['cover_file'] = null !== $this->coverFile ? $this->coverFile->toMap() : null;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->fileCount) {
            $res['file_count'] = $this->fileCount;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->userTags) {
            $res['user_tags'] = $this->userTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Album
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['album_id'])) {
            $model->albumId = $map['album_id'];
        }
        if (isset($map['base_face_file'])) {
            $model->baseFaceFile = File::fromMap($map['base_face_file']);
        }
        if (isset($map['base_face_group_id'])) {
            $model->baseFaceGroupId = $map['base_face_group_id'];
        }
        if (isset($map['cover_file'])) {
            $model->coverFile = File::fromMap($map['cover_file']);
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['file_count'])) {
            $model->fileCount = $map['file_count'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['user_tags'])) {
            $model->userTags = $map['user_tags'];
        }

        return $model;
    }
}
