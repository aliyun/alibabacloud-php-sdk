<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class RestoreRevisionRequest extends Model
{
    /**
     * @description The drive ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The file ID.
     *
     * This parameter is required.
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The version ID.
     *
     * This parameter is required.
     * @example 40CB7794C929
     *
     * @var string
     */
    public $revisionId;
    protected $_name = [
        'driveId'    => 'drive_id',
        'fileId'     => 'file_id',
        'revisionId' => 'revision_id',
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
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreRevisionRequest
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
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }

        return $model;
    }
}
