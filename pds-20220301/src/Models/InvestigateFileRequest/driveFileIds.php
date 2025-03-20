<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\InvestigateFileRequest;

use AlibabaCloud\Tea\Model;

class driveFileIds extends Model
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
    protected $_name = [
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return driveFileIds
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

        return $model;
    }
}
