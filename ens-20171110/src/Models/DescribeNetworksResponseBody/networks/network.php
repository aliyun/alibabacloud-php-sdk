<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks\network\vSwitchIds;
use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description The IPv4 CIDR block of the network.
     *
     * @example 10.0.xx.xx/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The timestamp when the instance was created. Unit: milliseconds.
     *
     * @example 2020-06-16T06:33:15Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the network.
     *
     * @example exampleDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the network access control list (ACL).
     *
     * @example nacl-a2do9e413e0spxscd****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The ID of the network.
     *
     * @example n-5***
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The name of the network.
     *
     * @example example
     *
     * @var string
     */
    public $networkName;

    /**
     * @description The route table ID.
     *
     * @example rtb-5**
     *
     * @var string
     */
    public $routerTableId;

    /**
     * @description The status of the network. Valid values:
     *
     *   Pending
     *   Available
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of vSwitches in the network.
     *
     * @var vSwitchIds
     */
    public $vSwitchIds;
    protected $_name = [
        'cidrBlock'     => 'CidrBlock',
        'createdTime'   => 'CreatedTime',
        'description'   => 'Description',
        'ensRegionId'   => 'EnsRegionId',
        'networkAclId'  => 'NetworkAclId',
        'networkId'     => 'NetworkId',
        'networkName'   => 'NetworkName',
        'routerTableId' => 'RouterTableId',
        'status'        => 'Status',
        'vSwitchIds'    => 'VSwitchIds',
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
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->networkName) {
            $res['NetworkName'] = $this->networkName;
        }
        if (null !== $this->routerTableId) {
            $res['RouterTableId'] = $this->routerTableId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['NetworkName'])) {
            $model->networkName = $map['NetworkName'];
        }
        if (isset($map['RouterTableId'])) {
            $model->routerTableId = $map['RouterTableId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        return $model;
    }
}
