<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponse;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $publicIpAddress;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'publicIpAddress'  => 'PublicIpAddress',
        'ensRegionId'      => 'EnsRegionId',
        'isp'              => 'Isp',
        'instanceName'     => 'InstanceName',
        'privateIpAddress' => 'PrivateIpAddress',
        'status'           => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('publicIpAddress', $this->publicIpAddress, true);
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('isp', $this->isp, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
