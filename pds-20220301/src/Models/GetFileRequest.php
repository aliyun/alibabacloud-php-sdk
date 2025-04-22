<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetFileRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fields;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var ImageProcess[]
     */
    public $thumbnailProcesses;

    /**
     * @var int
     */
    public $urlExpireSec;
    protected $_name = [
        'driveId' => 'drive_id',
        'fields' => 'fields',
        'fileId' => 'file_id',
        'shareId' => 'share_id',
        'thumbnailProcesses' => 'thumbnail_processes',
        'urlExpireSec' => 'url_expire_sec',
    ];

    public function validate()
    {
        if (\is_array($this->thumbnailProcesses)) {
            Model::validateArray($this->thumbnailProcesses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->thumbnailProcesses)) {
                $res['thumbnail_processes'] = [];
                foreach ($this->thumbnailProcesses as $key1 => $value1) {
                    $res['thumbnail_processes'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->urlExpireSec) {
            $res['url_expire_sec'] = $this->urlExpireSec;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['thumbnail_processes'])) {
                $model->thumbnailProcesses = [];
                foreach ($map['thumbnail_processes'] as $key1 => $value1) {
                    $model->thumbnailProcesses[$key1] = ImageProcess::fromMap($value1);
                }
            }
        }

        if (isset($map['url_expire_sec'])) {
            $model->urlExpireSec = $map['url_expire_sec'];
        }

        return $model;
    }
}
