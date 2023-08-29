<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Partition extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var int
     */
    public $lastAnalyzedTime;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var PrincipalPrivilegeSet
     */
    public $privileges;

    /**
     * @var StorageDescriptor
     */
    public $sd;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'databaseName'     => 'DatabaseName',
        'lastAccessTime'   => 'LastAccessTime',
        'lastAnalyzedTime' => 'LastAnalyzedTime',
        'parameters'       => 'Parameters',
        'privileges'       => 'Privileges',
        'sd'               => 'Sd',
        'tableName'        => 'TableName',
        'values'           => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lastAnalyzedTime) {
            $res['LastAnalyzedTime'] = $this->lastAnalyzedTime;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->privileges) {
            $res['Privileges'] = null !== $this->privileges ? $this->privileges->toMap() : null;
        }
        if (null !== $this->sd) {
            $res['Sd'] = null !== $this->sd ? $this->sd->toMap() : null;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Partition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['LastAnalyzedTime'])) {
            $model->lastAnalyzedTime = $map['LastAnalyzedTime'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Privileges'])) {
            $model->privileges = PrincipalPrivilegeSet::fromMap($map['Privileges']);
        }
        if (isset($map['Sd'])) {
            $model->sd = StorageDescriptor::fromMap($map['Sd']);
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
