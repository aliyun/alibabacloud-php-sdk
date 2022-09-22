<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks\network\vSwitchIds;
use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $networkName;

    /**
     * @var string
     */
    public $routerTableId;

    /**
     * @var string
     */
    public $status;

    /**
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
