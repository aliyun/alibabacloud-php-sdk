<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class BaseFileListInheritPermissionResponse extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var FilePermissionMember
     */
    public $member;
    protected $_name = [
        'fileId' => 'file_id',
        'member' => 'member',
    ];

    public function validate()
    {
        if (null !== $this->member) {
            $this->member->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->member) {
            $res['member'] = null !== $this->member ? $this->member->toArray($noStream) : $this->member;
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
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['member'])) {
            $model->member = FilePermissionMember::fromMap($map['member']);
        }

        return $model;
    }
}
