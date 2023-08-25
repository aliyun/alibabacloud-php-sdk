<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody\anycastEipBindInfoList\popLocations;
use AlibabaCloud\Tea\Model;

class anycastEipBindInfoList extends Model
{
    /**
     * @description The association mode. Valid values:
     *
     *   **Default**: the default mode. In this mode, associated cloud resources are set as default origin servers.
     *   **Normal**: the standard mode. In this mode, associated cloud resources are set as standard origin servers.
     *
     * @example Default
     *
     * @var string
     */
    public $associationMode;

    /**
     * @description The ID of the cloud resource with which the Anycast EIP is associated.
     *
     * @example lb-2zebb08phyczzawe****
     *
     * @var string
     */
    public $bindInstanceId;

    /**
     * @description The ID of the region in which the cloud resource is deployed.
     *
     * @example us-west-1
     *
     * @var string
     */
    public $bindInstanceRegionId;

    /**
     * @description The type of cloud resource with which the Anycast EIP is associated. Valid values:
     *
     *   **SlbInstance**: an internal-facing Server Load Balancer (SLB) instance that is deployed in a virtual private cloud (VPC)
     *   **NetworkInterface**: an elastic network interface (ENI)
     *
     * @example SlbInstance
     *
     * @var string
     */
    public $bindInstanceType;

    /**
     * @description The time when the Anycast EIP was associated.
     *
     * The time follows the ISO8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     * @example 2021-04-23T02:37:38Z
     *
     * @var string
     */
    public $bindTime;

    /**
     * @description The information about the access points in associated access areas when you associate an Anycast EIP with a cloud resource.
     *
     * If this is your first time associating an Anycast EIP with a cloud resource, the system returns information about access points in all access areas.
     * @var popLocations[]
     */
    public $popLocations;

    /**
     * @description The secondary private IP address of the associated ENI.
     *
     * This parameter is valid only when **BindInstanceType** is set to **NetworkInterface**.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The status of the cloud resource. Valid values:
     *
     *   **BINDING**
     *   **BINDED**
     *   **UNBINDING**
     *   **DELETED**
     *   **MODIFYING**
     *
     * @example BINDING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'associationMode'      => 'AssociationMode',
        'bindInstanceId'       => 'BindInstanceId',
        'bindInstanceRegionId' => 'BindInstanceRegionId',
        'bindInstanceType'     => 'BindInstanceType',
        'bindTime'             => 'BindTime',
        'popLocations'         => 'PopLocations',
        'privateIpAddress'     => 'PrivateIpAddress',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationMode) {
            $res['AssociationMode'] = $this->associationMode;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->bindInstanceRegionId) {
            $res['BindInstanceRegionId'] = $this->bindInstanceRegionId;
        }
        if (null !== $this->bindInstanceType) {
            $res['BindInstanceType'] = $this->bindInstanceType;
        }
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }
        if (null !== $this->popLocations) {
            $res['PopLocations'] = [];
            if (null !== $this->popLocations && \is_array($this->popLocations)) {
                $n = 0;
                foreach ($this->popLocations as $item) {
                    $res['PopLocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return anycastEipBindInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationMode'])) {
            $model->associationMode = $map['AssociationMode'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['BindInstanceRegionId'])) {
            $model->bindInstanceRegionId = $map['BindInstanceRegionId'];
        }
        if (isset($map['BindInstanceType'])) {
            $model->bindInstanceType = $map['BindInstanceType'];
        }
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }
        if (isset($map['PopLocations'])) {
            if (!empty($map['PopLocations'])) {
                $model->popLocations = [];
                $n                   = 0;
                foreach ($map['PopLocations'] as $item) {
                    $model->popLocations[$n++] = null !== $item ? popLocations::fromMap($item) : $item;
                }
            }
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
