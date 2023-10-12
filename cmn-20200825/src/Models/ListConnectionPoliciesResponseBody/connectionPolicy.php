<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListConnectionPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class connectionPolicy extends Model
{
    /**
     * @example 笛卡尔互联
     *
     * @var string
     */
    public $algorithm;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $architectureIterationId;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 上联设备uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $downlinkArchitectureDeviceId;

    /**
     * @description 下联设备uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $downlinkArchitectureModuleId;

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
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description 上联模块uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $uplinkArchitectureDeviceId;

    /**
     * @description 下联模块uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $uplinkArchitectureModuleId;
    protected $_name = [
        'algorithm'                    => 'Algorithm',
        'architectureIterationId'      => 'ArchitectureIterationId',
        'createTime'                   => 'CreateTime',
        'downlinkArchitectureDeviceId' => 'DownlinkArchitectureDeviceId',
        'downlinkArchitectureModuleId' => 'DownlinkArchitectureModuleId',
        'id'                           => 'Id',
        'linkCount'                    => 'LinkCount',
        'name'                         => 'Name',
        'updateTime'                   => 'UpdateTime',
        'uplinkArchitectureDeviceId'   => 'UplinkArchitectureDeviceId',
        'uplinkArchitectureModuleId'   => 'UplinkArchitectureModuleId',
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
        if (null !== $this->architectureIterationId) {
            $res['ArchitectureIterationId'] = $this->architectureIterationId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->downlinkArchitectureDeviceId) {
            $res['DownlinkArchitectureDeviceId'] = $this->downlinkArchitectureDeviceId;
        }
        if (null !== $this->downlinkArchitectureModuleId) {
            $res['DownlinkArchitectureModuleId'] = $this->downlinkArchitectureModuleId;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->uplinkArchitectureDeviceId) {
            $res['UplinkArchitectureDeviceId'] = $this->uplinkArchitectureDeviceId;
        }
        if (null !== $this->uplinkArchitectureModuleId) {
            $res['UplinkArchitectureModuleId'] = $this->uplinkArchitectureModuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['ArchitectureIterationId'])) {
            $model->architectureIterationId = $map['ArchitectureIterationId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DownlinkArchitectureDeviceId'])) {
            $model->downlinkArchitectureDeviceId = $map['DownlinkArchitectureDeviceId'];
        }
        if (isset($map['DownlinkArchitectureModuleId'])) {
            $model->downlinkArchitectureModuleId = $map['DownlinkArchitectureModuleId'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UplinkArchitectureDeviceId'])) {
            $model->uplinkArchitectureDeviceId = $map['UplinkArchitectureDeviceId'];
        }
        if (isset($map['UplinkArchitectureModuleId'])) {
            $model->uplinkArchitectureModuleId = $map['UplinkArchitectureModuleId'];
        }

        return $model;
    }
}
