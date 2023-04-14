<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ExtraDataSource;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $internal;

    /**
     * @example ExtraDataSource
     *
     * @var string
     */
    public $metaType;

    /**
     * @example test_project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @example ODPS
     *
     * @var string
     */
    public $type;

    /**
     * @example 86400
     *
     * @var int
     */
    public $updateFrequency;
    protected $_name = [
        'internal'        => 'Internal',
        'metaType'        => 'MetaType',
        'projectName'     => 'ProjectName',
        'tableName'       => 'TableName',
        'type'            => 'Type',
        'updateFrequency' => 'UpdateFrequency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internal) {
            $res['Internal'] = $this->internal;
        }
        if (null !== $this->metaType) {
            $res['MetaType'] = $this->metaType;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateFrequency) {
            $res['UpdateFrequency'] = $this->updateFrequency;
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
        if (isset($map['Internal'])) {
            $model->internal = $map['Internal'];
        }
        if (isset($map['MetaType'])) {
            $model->metaType = $map['MetaType'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateFrequency'])) {
            $model->updateFrequency = $map['UpdateFrequency'];
        }

        return $model;
    }
}
