<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupFilesRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * This parameter is required.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The path to the backup file.
     *
     * @example “”
     *
     * @var string
     */
    public $path;

    /**
     * @description The hash value of the backup file.
     *
     * This parameter is required.
     * @example a7f26223ef3974c6fac324cd37713ab65ab618859d20b4039192a5da44d77b63
     *
     * @var string
     */
    public $snapshotHash;

    /**
     * @description The UUID of the server to which an anti-ransomware policy is applied.
     *
     * This parameter is required.
     * @example 6d5b361f-958d-48a8-a9d2-d6e82c1a****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'pageSize'     => 'PageSize',
        'path'         => 'Path',
        'snapshotHash' => 'SnapshotHash',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
