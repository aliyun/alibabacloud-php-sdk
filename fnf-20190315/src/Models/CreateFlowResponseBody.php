<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowResponseBody extends Model
{
    /**
     * @example 2019-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example version: v1.0\ntype: flow\nname: test\nsteps:\n - type: pass\n name: mypass
     *
     * @var string
     */
    public $definition;

    /**
     * @example test flow
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionMode;

    /**
     * @example e589e092-e2c0-4dee-b306-3574ddfdddf5****
     *
     * @var string
     */
    public $id;

    /**
     * @example 2019-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @example flow
     *
     * @var string
     */
    public $name;

    /**
     * @example testRequestID
     *
     * @var string
     */
    public $requestId;

    /**
     * @example acs:ram:${region}:${accountID}:${role}
     *
     * @var string
     */
    public $roleArn;

    /**
     * @example FDL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createdTime'      => 'CreatedTime',
        'definition'       => 'Definition',
        'description'      => 'Description',
        'executionMode'    => 'ExecutionMode',
        'id'               => 'Id',
        'lastModifiedTime' => 'LastModifiedTime',
        'name'             => 'Name',
        'requestId'        => 'RequestId',
        'roleArn'          => 'RoleArn',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executionMode) {
            $res['ExecutionMode'] = $this->executionMode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutionMode'])) {
            $model->executionMode = $map['ExecutionMode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
