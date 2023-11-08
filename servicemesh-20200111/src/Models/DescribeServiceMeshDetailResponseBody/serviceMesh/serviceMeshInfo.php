<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh;

use AlibabaCloud\Tea\Model;

class serviceMeshInfo extends Model
{
    /**
     * @description The time when the ASM instance was created.
     *
     * @example 2020-04-21T09:42:20+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The returned error message.
     *
     * @example error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the ASM instance.
     *
     * @example mesh1
     *
     * @var string
     */
    public $name;

    /**
     * @description The edition of the ASM instance. Valid values:
     *
     *   `Default`: Standard Edition
     *   `Pro`: Enterprise Edition and Ultimate Edition
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The ID of the region in which the ASM instance resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ASM instance ID.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description The state of the ASM instance.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The time when the ASM instance was last modified.
     *
     * @example 2020-06-03T14:48:54+08:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The version of the ASM instance.
     *
     * @example v1.7.4.0-gfb34ba99-aliyun
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'errorMessage'  => 'ErrorMessage',
        'name'          => 'Name',
        'profile'       => 'Profile',
        'regionId'      => 'RegionId',
        'serviceMeshId' => 'ServiceMeshId',
        'state'         => 'State',
        'updateTime'    => 'UpdateTime',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
     * @return serviceMeshInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
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
