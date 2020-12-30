<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDataSourceResponseBody\result;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $partition;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $accessKeyId;
    protected $_name = [
        'type'        => 'Type',
        'tableName'   => 'TableName',
        'projectName' => 'ProjectName',
        'bucketName'  => 'BucketName',
        'path'        => 'Path',
        'partition'   => 'Partition',
        'timestamp'   => 'Timestamp',
        'accessKeyId' => 'AccessKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }

        return $model;
    }
}
