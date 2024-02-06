<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The ID of the node.
     *
     * @example cn-chengdu-telecom-4
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the instance.
     *
     * @example epn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example epn-test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ISP. Valid values:
     *
     *   cmcc: China Mobile
     *   unicom: China Unicom
     *   telecom: China Telecom
     *
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @description The private IP address.
     *
     * @example 192.168.1.12
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The public IP address.
     *
     * @example 20.3.XX.XX
     *
     * @var string
     */
    public $publicIpAddress;

    /**
     * @description The status of the instance. Valid values:
     *
     *   Running
     *   Stopped
     *   Expired
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ensRegionId'      => 'EnsRegionId',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'isp'              => 'Isp',
        'privateIpAddress' => 'PrivateIpAddress',
        'publicIpAddress'  => 'PublicIpAddress',
        'status'           => 'Status',
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
