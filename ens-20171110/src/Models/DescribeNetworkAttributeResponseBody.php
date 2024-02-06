<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\cloudResources;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\vSwitchIds;
use AlibabaCloud\Tea\Model;

class DescribeNetworkAttributeResponseBody extends Model
{
    /**
     * @description The IPv4 CIDR block of the network.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The list of resources in the network.
     *
     * @var cloudResources
     */
    public $cloudResources;

    /**
     * @description The time when the network was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-06-01T00:00:00Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the network.
     *
     * @example abc
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
     * @example nacl-a2do9e413e0sp****
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
     * @example abc
     *
     * @var string
     */
    public $networkName;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the route table.
     *
     * @example rtb-5***
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
        'cidrBlock'      => 'CidrBlock',
        'cloudResources' => 'CloudResources',
        'createdTime'    => 'CreatedTime',
        'description'    => 'Description',
        'ensRegionId'    => 'EnsRegionId',
        'networkAclId'   => 'NetworkAclId',
        'networkId'      => 'NetworkId',
        'networkName'    => 'NetworkName',
        'requestId'      => 'RequestId',
        'routerTableId'  => 'RouterTableId',
        'status'         => 'Status',
        'vSwitchIds'     => 'VSwitchIds',
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
        if (null !== $this->cloudResources) {
            $res['CloudResources'] = null !== $this->cloudResources ? $this->cloudResources->toMap() : null;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeNetworkAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CloudResources'])) {
            $model->cloudResources = cloudResources::fromMap($map['CloudResources']);
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
