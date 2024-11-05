<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody\haVips;

use AlibabaCloud\Tea\Model;

class associatedInstances extends Model
{
    /**
     * @description The time when the instance was created.
     *
     * @example 2023-01-05T07:09:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the instance.
     *
     * @example i-51p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the instance that is associated with the HAVIP. Valid values:
     *
     *   EnsInstance: ENS instance
     *   NetworkInterface: elastic network interface (ENI)
     *
     * @example EnsInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The private IP address of the instance that is associated with the HAVIP. Valid values:
     *
     * @example 192.XX.XX.9
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The association status of the HAVIP. Valid values:
     *
     *   Associating
     *   InUse
     *   Unassociating
     *
     * @example InUse
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'ipAddress'    => 'IpAddress',
        'status'       => 'Status',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
