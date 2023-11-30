<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class FileDeleteUserTagsRequest extends Model
{
    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The file ID.
     *
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The tags that you want to remove from a file. You cannot leave this parameter empty. You can specify up to 1,000 tags.
     *
     * @var string[]
     */
    public $keyList;
    protected $_name = [
        'driveId' => 'drive_id',
        'fileId'  => 'file_id',
        'keyList' => 'key_list',
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
        if (null !== $this->keyList) {
            $res['key_list'] = $this->keyList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileDeleteUserTagsRequest
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
        if (isset($map['key_list'])) {
            if (!empty($map['key_list'])) {
                $model->keyList = $map['key_list'];
            }
        }

        return $model;
    }
}
