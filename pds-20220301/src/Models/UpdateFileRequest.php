<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileRequest extends Model
{
    /**
     * @description The processing method that is used if the file that you want to modify has the same name as an existing file on the cloud. Valid values:
     *
     * Default value: ignore.
     * @example ignore
     *
     * @var string
     */
    public $checkNameMode;

    /**
     * @description The description of the file. The description can be up to 1,024 characters in length.
     *
     * @var string
     */
    public $description;

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
     * @description Specifies whether to hide the file.
     *
     * @example true
     *
     * @var bool
     */
    public $hidden;

    /**
     * @description The tags of the file. You can specify up to 100 tags.
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description The local time when the file was modified. The time is in the yyyy-MM-ddTHH:mm:ssZ format based on the UTC+0 time zone.
     *
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $localModifiedAt;

    /**
     * @description The name of the file. The name can be up to 1,024 bytes in length based on the UTF-8 encoding rule.
     *
     * @example a.jpg
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to add the file to favorites.
     *
     * @example true
     *
     * @var bool
     */
    public $starred;
    protected $_name = [
        'checkNameMode'   => 'check_name_mode',
        'description'     => 'description',
        'driveId'         => 'drive_id',
        'fileId'          => 'file_id',
        'hidden'          => 'hidden',
        'labels'          => 'labels',
        'localModifiedAt' => 'local_modified_at',
        'name'            => 'name',
        'starred'         => 'starred',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkNameMode) {
            $res['check_name_mode'] = $this->checkNameMode;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->hidden) {
            $res['hidden'] = $this->hidden;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->localModifiedAt) {
            $res['local_modified_at'] = $this->localModifiedAt;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->starred) {
            $res['starred'] = $this->starred;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_name_mode'])) {
            $model->checkNameMode = $map['check_name_mode'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['hidden'])) {
            $model->hidden = $map['hidden'];
        }
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = $map['labels'];
            }
        }
        if (isset($map['local_modified_at'])) {
            $model->localModifiedAt = $map['local_modified_at'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['starred'])) {
            $model->starred = $map['starred'];
        }

        return $model;
    }
}
