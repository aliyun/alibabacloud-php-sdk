<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceForInstanceRequest\devices;
use AlibabaCloud\Tea\Model;

class DeleteDeviceForInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $algorithmId;

    /**
     * @var bool
     */
    public $deleteInstanceFlag;

    /**
     * @var string
     */
    public $deviceCount;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'devices'            => 'Devices',
        'projectId'          => 'ProjectId',
        'algorithmId'        => 'AlgorithmId',
        'deleteInstanceFlag' => 'DeleteInstanceFlag',
        'deviceCount'        => 'DeviceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->devices) {
            $res['Devices'] = [];
            if (null !== $this->devices && \is_array($this->devices)) {
                $n = 0;
                foreach ($this->devices as $item) {
                    $res['Devices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->deleteInstanceFlag) {
            $res['DeleteInstanceFlag'] = $this->deleteInstanceFlag;
        }
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDeviceForInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n              = 0;
                foreach ($map['Devices'] as $item) {
                    $model->devices[$n++] = null !== $item ? devices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['DeleteInstanceFlag'])) {
            $model->deleteInstanceFlag = $map['DeleteInstanceFlag'];
        }
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }

        return $model;
    }
}
