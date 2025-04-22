<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\FilePutUserTagsRequest\userTags;

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
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'userTags' => 'user_tags',
    ];

    public function validate()
    {
        if (\is_array($this->userTags)) {
            Model::validateArray($this->userTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->userTags) {
            if (\is_array($this->userTags)) {
                $res['user_tags'] = [];
                $n1 = 0;
                foreach ($this->userTags as $item1) {
                    $res['user_tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['user_tags'])) {
            if (!empty($map['user_tags'])) {
                $model->userTags = [];
                $n1 = 0;
                foreach ($map['user_tags'] as $item1) {
                    $model->userTags[$n1++] = userTags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
