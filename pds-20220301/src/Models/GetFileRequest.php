<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetFileRequest extends Model
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
     * @description The fields to return.
     *
     * 1.  If this parameter is set to \*, all fields of the file except the fields that must be specified are returned.
     * By default, all fields except the fields that must be specified are returned.
     * @example *
     *
     * @var string
     */
    public $fields;

    /**
     * @description The file ID.
     *
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The share ID. If you want to manage a file by using a share link, carry the `x-share-token` header for authentication in the request and specify share_id. In this case, `drive_id` is invalid. Otherwise, use an `AccessKey pair` or `access token` for authentication and specify `drive_id`. You must specify one of `share_id` and `drive_id`.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description 缩略图配置，可一次性返回最多5个缩略图，map的key可以自定义，返回时按key返回对应的缩略图链接
     *
     * @var ImageProcess[]
     */
    public $thumbnailProcesses;

    /**
     * @description The time when the file expires. Unit: seconds. Valid values: 10 to 14400.
     *
     * @example 100
     *
     * @var int
     */
    public $urlExpireSec;
    protected $_name = [
        'driveId'            => 'drive_id',
        'fields'             => 'fields',
        'fileId'             => 'file_id',
        'shareId'            => 'share_id',
        'thumbnailProcesses' => 'thumbnail_processes',
        'urlExpireSec'       => 'url_expire_sec',
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
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->thumbnailProcesses) {
            $res['thumbnail_processes'] = [];
            if (null !== $this->thumbnailProcesses && \is_array($this->thumbnailProcesses)) {
                foreach ($this->thumbnailProcesses as $key => $val) {
                    $res['thumbnail_processes'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->urlExpireSec) {
            $res['url_expire_sec'] = $this->urlExpireSec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileRequest
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
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['thumbnail_processes'])) {
            $model->thumbnailProcesses = $map['thumbnail_processes'];
        }
        if (isset($map['url_expire_sec'])) {
            $model->urlExpireSec = $map['url_expire_sec'];
        }

        return $model;
    }
}
