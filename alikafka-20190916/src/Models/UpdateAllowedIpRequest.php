<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpdateAllowedIpRequest extends Model
{
    /**
     * @description The IP addresses that you want to manage. You can specify a CIDR block. Example: **192.168.0.0/16**.
     *
     *   If the **UpdateType** parameter is set to **add**, specify one or more IP addresses for this parameter. Separate multiple IP addresses with commas (,).
     *   If the **UpdateType** parameter is set to **delete**, specify only one IP address.
     *   Exercise caution when you delete IP addresses.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $allowedListIp;

    /**
     * @description The type of the whitelist. Valid values:
     *
     *   **vpc**: a whitelist for access from a VPC.
     *   **internet**: a whitelist for access from the Internet.
     *
     * @example vpc
     *
     * @var string
     */
    public $allowedListType;

    /**
     * @description The description of the whitelist.
     *
     * @example tf-testAccEcsImageConfigBasic3549descriptionChange
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance.
     *
     * @example alikafka_pre-cn-0pp1cng20***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The port range. Valid values:
     *
     *   **9092/9092**: the port range for access from a virtual private cloud (VPC).
     *   **9093/9093**: the port range for access from the Internet.
     *
     * The value of this parameter must match the value of the **AllowdedListType** parameter.
     * @example 9092/9092
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The ID of the region where the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of configuration change. Valid values:
     *
     *   **add**
     *   **delete**
     *
     * @example add
     *
     * @var string
     */
    public $updateType;
    protected $_name = [
        'allowedListIp'   => 'AllowedListIp',
        'allowedListType' => 'AllowedListType',
        'description'     => 'Description',
        'instanceId'      => 'InstanceId',
        'portRange'       => 'PortRange',
        'regionId'        => 'RegionId',
        'updateType'      => 'UpdateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedListIp) {
            $res['AllowedListIp'] = $this->allowedListIp;
        }
        if (null !== $this->allowedListType) {
            $res['AllowedListType'] = $this->allowedListType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAllowedIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedListIp'])) {
            $model->allowedListIp = $map['AllowedListIp'];
        }
        if (isset($map['AllowedListType'])) {
            $model->allowedListType = $map['AllowedListType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }

        return $model;
    }
}
