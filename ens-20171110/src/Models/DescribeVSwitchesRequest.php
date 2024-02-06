<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeVSwitchesRequest extends Model
{
    /**
     * @description The ID of the edge node.
     *
     * @example cn-xian-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the VPC to which the vSwitches belong.
     *
     * @example vpc-25cdvfeq58pl****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The order in which you want to sort the returned data. Example: {"EnsRegionId":"desc"}.
     *
     * By default, the nodes are sorted by IDs in descending order.
     * @example {"EnsRegionId":"desc"}
     *
     * @var string
     */
    public $orderByParams;

    /**
     * @description The page number of the returned page. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: **1 to 50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-5m9xhlq8oh***
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     * @example testVSwitchName
     *
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'ensRegionId'   => 'EnsRegionId',
        'networkId'     => 'NetworkId',
        'orderByParams' => 'OrderByParams',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'vSwitchId'     => 'VSwitchId',
        'vSwitchName'   => 'VSwitchName',
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
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->orderByParams) {
            $res['OrderByParams'] = $this->orderByParams;
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
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVSwitchesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['OrderByParams'])) {
            $model->orderByParams = $map['OrderByParams'];
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
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }

        return $model;
    }
}
