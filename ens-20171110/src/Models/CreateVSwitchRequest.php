<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateVSwitchRequest extends Model
{
    /**
     * @description The CIDR block of the vSwitch. Take note of the following limits:
     *
     *   The subnet mask must be 16 to 29 bits in length.
     *   The CIDR block of the vSwitch must fall within the CIDR block of the VPC to which the vSwitch belongs.
     *   The CIDR block of the vSwitch cannot be the same as the destination CIDR block in a route entry of the VPC. However, it can be a subset of the destination CIDR block.
     *
     * This parameter is required.
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The description of the vSwitch.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with http:// or https://.
     * @example This is my vswitch.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the edge node.
     *
     * This parameter is required.
     * @example cn-xian-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the network to which the vSwitch that you want to create belongs.
     *
     * @example n-257gqcdfvx6n****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The name of the vSwitch. The name must meet the following requirements:
     *
     *   The name must be 2 to 128 characters in length.
     *   The name must start with a letter and cannot start with http:// or https://. It can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * Default value: null.
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'cidrBlock'   => 'CidrBlock',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'networkId'   => 'NetworkId',
        'vSwitchName' => 'VSwitchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }

        return $model;
    }
}
