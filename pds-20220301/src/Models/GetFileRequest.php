<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetFileRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example *
     *
     * @var string
     */
    public $fields;

    /**
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @var ImageProcess[]
     */
    public $thumbnailProcesses;

    /**
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
