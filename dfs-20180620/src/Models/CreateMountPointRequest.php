<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class CreateMountPointRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example acg-e3755fb0-358d-4286-9942-8d461048****
     *
     * @var string
     */
    public $accessGroupId;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @description This parameter is required.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @var bool
     */
    public $usePerformanceMode;

    /**
     * @description This parameter is required.
     *
     * @example vsw-iq8fymi327krd14mt****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description This parameter is required.
     *
     * @example vpc-iq8hhsk3ymzv9m4wn****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessGroupId' => 'AccessGroupId',
        'description' => 'Description',
        'fileSystemId' => 'FileSystemId',
        'inputRegionId' => 'InputRegionId',
        'networkType' => 'NetworkType',
        'usePerformanceMode' => 'UsePerformanceMode',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupId) {
            $res['AccessGroupId'] = $this->accessGroupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->usePerformanceMode) {
            $res['UsePerformanceMode'] = $this->usePerformanceMode;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMountPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupId'])) {
            $model->accessGroupId = $map['AccessGroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['UsePerformanceMode'])) {
            $model->usePerformanceMode = $map['UsePerformanceMode'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
