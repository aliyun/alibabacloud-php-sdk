<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->member) {
            $res['member'] = null !== $this->member ? $this->member->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BaseFileListInheritPermissionResponse
     */
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
