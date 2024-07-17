<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\versions\files;
use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @description The description of the index version.
     *
     * @example close alarm, by 3.9.2 hotfix workflow
     *
     * @var string
     */
    public $desc;

    /**
     * @description The files.
     *
     * @var files[]
     */
    public $files;

    /**
     * @description The name of the index version.
     *
     * @example ha-cn-7pp2ngv4s02_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the index version. Valid values:
     *
     *   NEW: The index version is created.
     *   PUBLISH: The index version is normal.
     *   IN_USE: The index version is in use.
     *   NOT_USE: The index version is not used.
     *   STOP_USE: The index version is being stopped.
     *   RESTORE_USE: The index version is being restored.
     *   FAIL: The index version failed to be created.
     *
     * @example 2
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the index version was updated.
     *
     * @example " "
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the index version. If the index version is modified, the returned value is null.
     *
     * @example 1
     *
     * @var int
     */
    public $versionId;
    protected $_name = [
        'desc'       => 'desc',
        'files'      => 'files',
        'name'       => 'name',
        'status'     => 'status',
        'updateTime' => 'updateTime',
        'versionId'  => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->files) {
            $res['files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
