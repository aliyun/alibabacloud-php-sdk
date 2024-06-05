<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetRevisionRequest extends Model
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
     * @description Specifies the returned fields.
     *
     * By default, this parameter is left empty. If you set this parameter to \\*, all fields are returned. If you leave this parameter empty, the creator of the file is not returned.
     * @example *
     *
     * @var string
     */
    public $fields;

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

    /**
     * @description The validity period of the file download or preview. Valid values: 10 to 86400.
     *
     * Default value: 900. Unit: seconds.
     * @example 900
     *
     * @var int
     */
    public $urlExpireSec;
    protected $_name = [
        'driveId'      => 'drive_id',
        'fields'       => 'fields',
        'fileId'       => 'file_id',
        'revisionId'   => 'revision_id',
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
        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }
        if (null !== $this->urlExpireSec) {
            $res['url_expire_sec'] = $this->urlExpireSec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRevisionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['fields'])) {
            $model->fields = $map['fields'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }
        if (isset($map['url_expire_sec'])) {
            $model->urlExpireSec = $map['url_expire_sec'];
        }

        return $model;
    }
}
