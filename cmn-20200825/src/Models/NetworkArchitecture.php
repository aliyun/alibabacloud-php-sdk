<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class NetworkArchitecture extends Model
{
    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $archVersionIterationId;

    /**
     * @example true
     *
     * @var bool
     */
    public $availabe;

    /**
     * @var string[]
     */
    public $children;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 5.0架构
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $deviceNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $groupNumber;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $id;

    /**
     * @example 5.0
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkArchitectureId;

    /**
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example true
     *
     * @var bool
     */
    public $selected;

    /**
     * @example true
     *
     * @var bool
     */
    public $stack;

    /**
     * @example USED、UNUSED、DEFINNIG
     *
     * @var string
     */
    public $status;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example V1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'archVersionIterationId' => 'ArchVersionIterationId',
        'availabe'               => 'Availabe',
        'children'               => 'Children',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'deviceNumber'           => 'DeviceNumber',
        'groupNumber'            => 'GroupNumber',
        'id'                     => 'Id',
        'name'                   => 'Name',
        'networkArchitectureId'  => 'NetworkArchitectureId',
        'role'                   => 'Role',
        'selected'               => 'Selected',
        'stack'                  => 'Stack',
        'status'                 => 'Status',
        'updateTime'             => 'UpdateTime',
        'version'                => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archVersionIterationId) {
            $res['ArchVersionIterationId'] = $this->archVersionIterationId;
        }
        if (null !== $this->availabe) {
            $res['Availabe'] = $this->availabe;
        }
        if (null !== $this->children) {
            $res['Children'] = $this->children;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceNumber) {
            $res['DeviceNumber'] = $this->deviceNumber;
        }
        if (null !== $this->groupNumber) {
            $res['GroupNumber'] = $this->groupNumber;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkArchitectureId) {
            $res['NetworkArchitectureId'] = $this->networkArchitectureId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }
        if (null !== $this->stack) {
            $res['Stack'] = $this->stack;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NetworkArchitecture
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchVersionIterationId'])) {
            $model->archVersionIterationId = $map['ArchVersionIterationId'];
        }
        if (isset($map['Availabe'])) {
            $model->availabe = $map['Availabe'];
        }
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = $map['Children'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceNumber'])) {
            $model->deviceNumber = $map['DeviceNumber'];
        }
        if (isset($map['GroupNumber'])) {
            $model->groupNumber = $map['GroupNumber'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkArchitectureId'])) {
            $model->networkArchitectureId = $map['NetworkArchitectureId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }
        if (isset($map['Stack'])) {
            $model->stack = $map['Stack'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
