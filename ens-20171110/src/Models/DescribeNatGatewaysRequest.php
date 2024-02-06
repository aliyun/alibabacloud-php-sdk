<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeNatGatewaysRequest extends Model
{
    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-wuxi-9
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the NAT gateway.
     *
     * @example test0
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example nat-5t7nh1cfm6kxiszlttr38****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The ID of the network.
     *
     * @example n-2zeuphj08tt7q3brd****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The page number. Pages start from page **1**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. The maximum value is **100**.
     *
     * Default value: **10**.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-5rllcjb3ol6duzjdnbm1o****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ensRegionId'  => 'EnsRegionId',
        'name'         => 'Name',
        'natGatewayId' => 'NatGatewayId',
        'networkId'    => 'NetworkId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'vSwitchId'    => 'VSwitchId',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNatGatewaysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
