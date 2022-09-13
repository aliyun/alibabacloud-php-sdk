<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\FilePutUserTagsRequest\userTags;
use AlibabaCloud\Tea\Model;

class FilePutUserTagsRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var userTags[]
     */
    public $userTags;
    protected $_name = [
        'driveId'  => 'drive_id',
        'fileId'   => 'file_id',
        'userTags' => 'user_tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FilePutUserTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['user_tags'])) {
            if (!empty($map['user_tags'])) {
                $model->userTags = [];
                $n               = 0;
                foreach ($map['user_tags'] as $item) {
                    $model->userTags[$n++] = null !== $item ? userTags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
