<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcHoneyPotListRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 2
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the cloud honeypot feature is enabled for the VPC. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $honeyPotExistence;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the VPC on which the honeypot is deployed.
     *
     * >  You can call the [DescribeVpcList](~~DescribeVpcList~~) operation to query the IDs of VPCs.
     * @example vpc-d7o009q63fqy21r8u****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * >  You can call the [DescribeVpcList](~~DescribeVpcList~~) operation to query the names of VPCs.
     * @example abcnet
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description The region ID of the VPC.
     *
     * >  You can call the [DescribeVpcList](~~DescribeVpcList~~) operation to query the region IDs of VPCs.
     * @example ap-southeast-2
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'honeyPotExistence' => 'HoneyPotExistence',
        'pageSize'          => 'PageSize',
        'vpcId'             => 'VpcId',
        'vpcName'           => 'VpcName',
        'vpcRegionId'       => 'VpcRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->honeyPotExistence) {
            $res['HoneyPotExistence'] = $this->honeyPotExistence;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcHoneyPotListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HoneyPotExistence'])) {
            $model->honeyPotExistence = $map['HoneyPotExistence'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}
