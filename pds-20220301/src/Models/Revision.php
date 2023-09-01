<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class Revision extends Model
{
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
    public $crc64Hash;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

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
    public $isLatestVersion;

    /**
     * @var bool
     */
    public $keepForever;

    /**
     * @var string
     */
    public $revisionDescription;

    /**
     * @var string
     */
    public $revisionId;

    /**
     * @var string
     */
    public $revisionName;

    /**
     * @var int
     */
    public $revisionVersion;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'contentHash'         => 'content_hash',
        'contentHashName'     => 'content_hash_name',
        'crc64Hash'           => 'crc64_hash',
        'createdAt'           => 'created_at',
        'creatorId'           => 'creator_id',
        'creatorName'         => 'creator_name',
        'domainId'            => 'domain_id',
        'downloadUrl'         => 'download_url',
        'driveId'             => 'drive_id',
        'fileExtension'       => 'file_extension',
        'fileId'              => 'file_id',
        'isLatestVersion'     => 'is_latest_version',
        'keepForever'         => 'keep_forever',
        'revisionDescription' => 'revision_description',
        'revisionId'          => 'revision_id',
        'revisionName'        => 'revision_name',
        'revisionVersion'     => 'revision_version',
        'size'                => 'size',
        'thumbnail'           => 'thumbnail',
        'updatedAt'           => 'updated_at',
        'url'                 => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentHash) {
            $res['content_hash'] = $this->contentHash;
        }
        if (null !== $this->contentHashName) {
            $res['content_hash_name'] = $this->contentHashName;
        }
        if (null !== $this->crc64Hash) {
            $res['crc64_hash'] = $this->crc64Hash;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->creatorId) {
            $res['creator_id'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['creator_name'] = $this->creatorName;
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
        if (null !== $this->isLatestVersion) {
            $res['is_latest_version'] = $this->isLatestVersion;
        }
        if (null !== $this->keepForever) {
            $res['keep_forever'] = $this->keepForever;
        }
        if (null !== $this->revisionDescription) {
            $res['revision_description'] = $this->revisionDescription;
        }
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }
        if (null !== $this->revisionName) {
            $res['revision_name'] = $this->revisionName;
        }
        if (null !== $this->revisionVersion) {
            $res['revision_version'] = $this->revisionVersion;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->thumbnail) {
            $res['thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Revision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content_hash'])) {
            $model->contentHash = $map['content_hash'];
        }
        if (isset($map['content_hash_name'])) {
            $model->contentHashName = $map['content_hash_name'];
        }
        if (isset($map['crc64_hash'])) {
            $model->crc64Hash = $map['crc64_hash'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['creator_id'])) {
            $model->creatorId = $map['creator_id'];
        }
        if (isset($map['creator_name'])) {
            $model->creatorName = $map['creator_name'];
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
        if (isset($map['is_latest_version'])) {
            $model->isLatestVersion = $map['is_latest_version'];
        }
        if (isset($map['keep_forever'])) {
            $model->keepForever = $map['keep_forever'];
        }
        if (isset($map['revision_description'])) {
            $model->revisionDescription = $map['revision_description'];
        }
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }
        if (isset($map['revision_name'])) {
            $model->revisionName = $map['revision_name'];
        }
        if (isset($map['revision_version'])) {
            $model->revisionVersion = $map['revision_version'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['thumbnail'])) {
            $model->thumbnail = $map['thumbnail'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
