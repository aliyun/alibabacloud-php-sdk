<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CsiGetFileInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description This parameter is required.
     *
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 100
     *
     * @var int
     */
    public $urlExpireSec;
    protected $_name = [
        'driveId'      => 'drive_id',
        'fileId'       => 'file_id',
        'urlExpireSec' => 'url_expire_sec',
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
        if (null !== $this->urlExpireSec) {
            $res['url_expire_sec'] = $this->urlExpireSec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CsiGetFileInfoRequest
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
        if (isset($map['url_expire_sec'])) {
            $model->urlExpireSec = $map['url_expire_sec'];
        }

        return $model;
    }
}
