<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateConnectionRequest extends Model
{
    /**
     * @description The type of the connection string.
     *
     * @example rds
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description Details of the data source.
     *
     * @example {"database":"dbname","instanceName":"instancename","password":"password","rdsOwnerId":"123","username":"username"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the connection string.
     *
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description Environment of the data source.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The name of the data source.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the workspace to be associated with the data source.
     *
     * @example 1
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The sub-type of a connection string.
     *
     * @example mysql
     *
     * @var string
     */
    public $subType;
    protected $_name = [
        'connectionType' => 'ConnectionType',
        'content'        => 'Content',
        'description'    => 'Description',
        'envType'        => 'EnvType',
        'name'           => 'Name',
        'projectId'      => 'ProjectId',
        'subType'        => 'SubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
