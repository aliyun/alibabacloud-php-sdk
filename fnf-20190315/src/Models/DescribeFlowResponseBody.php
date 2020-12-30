<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowResponseBody extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $externalStorageLocation;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'type'                    => 'Type',
        'description'             => 'Description',
        'createdTime'             => 'CreatedTime',
        'requestId'               => 'RequestId',
        'definition'              => 'Definition',
        'lastModifiedTime'        => 'LastModifiedTime',
        'id'                      => 'Id',
        'externalStorageLocation' => 'ExternalStorageLocation',
        'roleArn'                 => 'RoleArn',
        'name'                    => 'Name',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->externalStorageLocation) {
            $res['ExternalStorageLocation'] = $this->externalStorageLocation;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ExternalStorageLocation'])) {
            $model->externalStorageLocation = $map['ExternalStorageLocation'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
