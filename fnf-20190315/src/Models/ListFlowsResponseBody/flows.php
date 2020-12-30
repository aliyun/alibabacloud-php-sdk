<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class flows extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $externalStorageLocation;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'type'                    => 'Type',
        'definition'              => 'Definition',
        'roleArn'                 => 'RoleArn',
        'description'             => 'Description',
        'externalStorageLocation' => 'ExternalStorageLocation',
        'name'                    => 'Name',
        'createdTime'             => 'CreatedTime',
        'lastModifiedTime'        => 'LastModifiedTime',
        'id'                      => 'Id',
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
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->externalStorageLocation) {
            $res['ExternalStorageLocation'] = $this->externalStorageLocation;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExternalStorageLocation'])) {
            $model->externalStorageLocation = $map['ExternalStorageLocation'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
