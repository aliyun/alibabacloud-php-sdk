<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ConnectionPolicy extends Model
{
    /**
     * @example 笛卡尔互联
     *
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $connectionPolicyId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $downlinkDeviceId;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $downlinkModuleId;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $id;

    /**
     * @example 2
     *
     * @var int
     */
    public $linkCount;

    /**
     * @example pswtoasw
     *
     * @var string
     */
    public $name;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $networkArchitectureIterationId;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $uplinkDeviceId;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $uplinkModelId;
    protected $_name = [
        'algorithm'                      => 'Algorithm',
        'connectionPolicyId'             => 'ConnectionPolicyId',
        'createTime'                     => 'CreateTime',
        'downlinkDeviceId'               => 'DownlinkDeviceId',
        'downlinkModuleId'               => 'DownlinkModuleId',
        'id'                             => 'Id',
        'linkCount'                      => 'LinkCount',
        'name'                           => 'Name',
        'networkArchitectureIterationId' => 'NetworkArchitectureIterationId',
        'updateTime'                     => 'UpdateTime',
        'uplinkDeviceId'                 => 'UplinkDeviceId',
        'uplinkModelId'                  => 'UplinkModelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->connectionPolicyId) {
            $res['ConnectionPolicyId'] = $this->connectionPolicyId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->downlinkDeviceId) {
            $res['DownlinkDeviceId'] = $this->downlinkDeviceId;
        }
        if (null !== $this->downlinkModuleId) {
            $res['DownlinkModuleId'] = $this->downlinkModuleId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->linkCount) {
            $res['LinkCount'] = $this->linkCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkArchitectureIterationId) {
            $res['NetworkArchitectureIterationId'] = $this->networkArchitectureIterationId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->uplinkDeviceId) {
            $res['UplinkDeviceId'] = $this->uplinkDeviceId;
        }
        if (null !== $this->uplinkModelId) {
            $res['UplinkModelId'] = $this->uplinkModelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConnectionPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['ConnectionPolicyId'])) {
            $model->connectionPolicyId = $map['ConnectionPolicyId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DownlinkDeviceId'])) {
            $model->downlinkDeviceId = $map['DownlinkDeviceId'];
        }
        if (isset($map['DownlinkModuleId'])) {
            $model->downlinkModuleId = $map['DownlinkModuleId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LinkCount'])) {
            $model->linkCount = $map['LinkCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkArchitectureIterationId'])) {
            $model->networkArchitectureIterationId = $map['NetworkArchitectureIterationId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UplinkDeviceId'])) {
            $model->uplinkDeviceId = $map['UplinkDeviceId'];
        }
        if (isset($map['UplinkModelId'])) {
            $model->uplinkModelId = $map['UplinkModelId'];
        }

        return $model;
    }
}
