<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeArchiveTableListResponseBody\data;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var string
     */
    public $archiveStatus;

    /**
     * @var int
     */
    public $createdDate;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var int
     */
    public $lastSuccessArchiveTime;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var float
     */
    public $spaceSize;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'archiveStatus'          => 'ArchiveStatus',
        'createdDate'            => 'CreatedDate',
        'fileCount'              => 'FileCount',
        'lastSuccessArchiveTime' => 'LastSuccessArchiveTime',
        'schemaName'             => 'SchemaName',
        'spaceSize'              => 'SpaceSize',
        'tableName'              => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveStatus) {
            $res['ArchiveStatus'] = $this->archiveStatus;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->fileCount) {
            $res['FileCount'] = $this->fileCount;
        }
        if (null !== $this->lastSuccessArchiveTime) {
            $res['LastSuccessArchiveTime'] = $this->lastSuccessArchiveTime;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->spaceSize) {
            $res['SpaceSize'] = $this->spaceSize;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveStatus'])) {
            $model->archiveStatus = $map['ArchiveStatus'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['FileCount'])) {
            $model->fileCount = $map['FileCount'];
        }
        if (isset($map['LastSuccessArchiveTime'])) {
            $model->lastSuccessArchiveTime = $map['LastSuccessArchiveTime'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SpaceSize'])) {
            $model->spaceSize = $map['SpaceSize'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
