<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSDGStatusResponseBody;

use AlibabaCloud\Tea\Model;

class deploymentStatus extends Model
{
    /**
     * @example cn-guangzhou-26
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example aic-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example shared
     *
     * @var string
     */
    public $mountType;

    /**
     * @example attach
     *
     * @var string
     */
    public $phase;

    /**
     * @example sdg-xxxxxxx
     *
     * @var string
     */
    public $SDGId;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example 2023-02-17T02:44:31Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'instanceId'  => 'InstanceId',
        'mountType'   => 'MountType',
        'phase'       => 'Phase',
        'SDGId'       => 'SDGId',
        'status'      => 'Status',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mountType) {
            $res['MountType'] = $this->mountType;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MountType'])) {
            $model->mountType = $map['MountType'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
