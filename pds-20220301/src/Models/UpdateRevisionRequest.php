<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateRevisionRequest extends Model
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
     * @description Specifies whether to permanently retain a version.
     *
     * By default, this parameter is not specified, which indicates that you do not modify the permanent retention configuration of the version.
     * @example true
     *
     * @var bool
     */
    public $keepForever;

    /**
     * @description The description of the version. The description can be up to 1,024 characters in length.
     *
     * By default, this parameter is not specified, which indicates that you do not modify the description of the version.
     * @example aaa
     *
     * @var string
     */
    public $revisionDescription;

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
        'driveId'             => 'drive_id',
        'fileId'              => 'file_id',
        'keepForever'         => 'keep_forever',
        'revisionDescription' => 'revision_description',
        'revisionId'          => 'revision_id',
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
        if (null !== $this->keepForever) {
            $res['keep_forever'] = $this->keepForever;
        }
        if (null !== $this->revisionDescription) {
            $res['revision_description'] = $this->revisionDescription;
        }
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRevisionRequest
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
        if (isset($map['keep_forever'])) {
            $model->keepForever = $map['keep_forever'];
        }
        if (isset($map['revision_description'])) {
            $model->revisionDescription = $map['revision_description'];
        }
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }

        return $model;
    }
}
