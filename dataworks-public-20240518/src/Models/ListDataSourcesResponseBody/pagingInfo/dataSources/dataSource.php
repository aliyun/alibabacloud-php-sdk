<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourcesResponseBody\pagingInfo\dataSources;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @example {
     * }
     * @var mixed
     */
    public $connectionProperties;

    /**
     * @example UrlMode
     *
     * @var string
     */
    public $connectionPropertiesMode;

    /**
     * @example 1648711113000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1624387842781448
     *
     * @var string
     */
    public $createUser;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 16035
     *
     * @var int
     */
    public $id;

    /**
     * @example 1648711113000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example 1624387842781448
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @example 1648711121000:cn-beijing:odps:yongxunQA_beijing_standard
     *
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'connectionProperties'     => 'ConnectionProperties',
        'connectionPropertiesMode' => 'ConnectionPropertiesMode',
        'createTime'               => 'CreateTime',
        'createUser'               => 'CreateUser',
        'description'              => 'Description',
        'id'                       => 'Id',
        'modifyTime'               => 'ModifyTime',
        'modifyUser'               => 'ModifyUser',
        'qualifiedName'            => 'QualifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
        }
        if (null !== $this->connectionPropertiesMode) {
            $res['ConnectionPropertiesMode'] = $this->connectionPropertiesMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }
        if (isset($map['ConnectionPropertiesMode'])) {
            $model->connectionPropertiesMode = $map['ConnectionPropertiesMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}
