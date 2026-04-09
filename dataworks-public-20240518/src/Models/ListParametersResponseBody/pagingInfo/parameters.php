<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListParametersResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListParametersResponseBody\pagingInfo\parameters\properties;

class parameters extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $modifyUser;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var properties[]
     */
    public $properties;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'description' => 'Description',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'properties' => 'Properties',
        'scope' => 'Scope',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['Properties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['Properties'] as $item1) {
                    $model->properties[$n1] = properties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
