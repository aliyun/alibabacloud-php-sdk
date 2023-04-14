<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ModifyDataSourceResponseBody\result;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example airec
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example ds=20181122
     *
     * @var string
     */
    public $partition;

    /**
     * @example oss://xxx.xxx
     *
     * @var string
     */
    public $path;

    /**
     * @description ODPS project name。
     *
     * @example openrec_gray
     *
     * @var string
     */
    public $projectName;

    /**
     * @description ODPS table name。
     *
     * @example test_maxcompute
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 1544112000000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example ODPS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accessKeyId' => 'accessKeyId',
        'bucketName'  => 'bucketName',
        'partition'   => 'partition',
        'path'        => 'path',
        'projectName' => 'projectName',
        'tableName'   => 'tableName',
        'timestamp'   => 'timestamp',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
