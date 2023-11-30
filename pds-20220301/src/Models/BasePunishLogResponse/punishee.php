<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\BasePunishLogResponse;

use AlibabaCloud\SDK\Pds\V20220301\Models\BasePunishLogResponse\punishee\contentHash;
use AlibabaCloud\Tea\Model;

class punishee extends Model
{
    /**
     * @var contentHash
     */
    public $contentHash;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $faceGroupId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $revisionId;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'contentHash' => 'content_hash',
        'driveId'     => 'drive_id',
        'faceGroupId' => 'face_group_id',
        'fileId'      => 'file_id',
        'revisionId'  => 'revision_id',
        'shareId'     => 'share_id',
        'userId'      => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentHash) {
            $res['content_hash'] = null !== $this->contentHash ? $this->contentHash->toMap() : null;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->faceGroupId) {
            $res['face_group_id'] = $this->faceGroupId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return punishee
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content_hash'])) {
            $model->contentHash = contentHash::fromMap($map['content_hash']);
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['face_group_id'])) {
            $model->faceGroupId = $map['face_group_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
