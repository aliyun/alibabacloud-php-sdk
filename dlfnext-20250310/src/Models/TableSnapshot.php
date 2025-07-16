<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class TableSnapshot extends Model
{
    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var int
     */
    public $fileSizeInBytes;

    /**
     * @var int
     */
    public $lastFileCreationTime;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var Snapshot
     */
    public $snapshot;
    protected $_name = [
        'fileCount' => 'fileCount',
        'fileSizeInBytes' => 'fileSizeInBytes',
        'lastFileCreationTime' => 'lastFileCreationTime',
        'recordCount' => 'recordCount',
        'snapshot' => 'snapshot',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileCount) {
            $res['fileCount'] = $this->fileCount;
        }
        if (null !== $this->fileSizeInBytes) {
            $res['fileSizeInBytes'] = $this->fileSizeInBytes;
        }
        if (null !== $this->lastFileCreationTime) {
            $res['lastFileCreationTime'] = $this->lastFileCreationTime;
        }
        if (null !== $this->recordCount) {
            $res['recordCount'] = $this->recordCount;
        }
        if (null !== $this->snapshot) {
            $res['snapshot'] = null !== $this->snapshot ? $this->snapshot->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TableSnapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileCount'])) {
            $model->fileCount = $map['fileCount'];
        }
        if (isset($map['fileSizeInBytes'])) {
            $model->fileSizeInBytes = $map['fileSizeInBytes'];
        }
        if (isset($map['lastFileCreationTime'])) {
            $model->lastFileCreationTime = $map['lastFileCreationTime'];
        }
        if (isset($map['recordCount'])) {
            $model->recordCount = $map['recordCount'];
        }
        if (isset($map['snapshot'])) {
            $model->snapshot = Snapshot::fromMap($map['snapshot']);
        }

        return $model;
    }
}
