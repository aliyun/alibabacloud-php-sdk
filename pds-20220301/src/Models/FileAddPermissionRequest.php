<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class FileAddPermissionRequest extends Model
{
    /**
     * @description The drive ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The ID of the folder. If you want to authorize a user or group to access a team drive, set this parameter to root. If you want to authorize a user or group to access an individual drive, you cannot set this parameter to root.
     *
     * This parameter is required.
     *
     * @example 4221bf6e6ab43c255edc4463bf3a6f5f5d317406
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The members that are authorized to access files.
     *
     * This parameter is required.
     *
     * @var FilePermissionMember[]
     */
    public $memberList;
    protected $_name = [
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'memberList' => 'member_list',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->memberList) {
            $res['member_list'] = [];
            if (null !== $this->memberList && \is_array($this->memberList)) {
                $n = 0;
                foreach ($this->memberList as $item) {
                    $res['member_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileAddPermissionRequest
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
        if (isset($map['member_list'])) {
            if (!empty($map['member_list'])) {
                $model->memberList = [];
                $n = 0;
                foreach ($map['member_list'] as $item) {
                    $model->memberList[$n++] = null !== $item ? FilePermissionMember::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
