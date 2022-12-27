<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\cloudResources;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\vSwitchIds;
use AlibabaCloud\Tea\Model;

class DescribeNetworkAttributeResponseBody extends Model
{
    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @var cloudResources
     */
    public $cloudResources;

    /**
     * @example 2019-06-01T00:00:00Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @example n-5***
     *
     * @var string
     */
    public $networkId;

    /**
     * @example abc
     *
     * @var string
     */
    public $networkName;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rtb-5***
     *
     * @var string
     */
    public $routerTableId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
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
