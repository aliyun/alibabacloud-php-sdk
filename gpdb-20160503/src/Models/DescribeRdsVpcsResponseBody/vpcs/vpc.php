<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody\vpcs;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody\vpcs\vpc\vSwitchs;
use AlibabaCloud\Tea\Model;

class vpc extends Model
{
    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $bid;

    /**
     * @description The CIDR block of the VPC.
     *
     * @example 10.**.**.0/8
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether the VPC is the default VPC. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The state of the VPC. If **Available** is returned, the VPC is available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The queried vSwitches.
     *
     * @var vSwitchs[]
     */
    public $vSwitchs;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp*******************
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example vpc-name
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'aliUid'      => 'AliUid',
        'bid'         => 'Bid',
        'cidrBlock'   => 'CidrBlock',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'isDefault'   => 'IsDefault',
        'regionNo'    => 'RegionNo',
        'status'      => 'Status',
        'vSwitchs'    => 'VSwitchs',
        'vpcId'       => 'VpcId',
        'vpcName'     => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchs) {
            $res['VSwitchs'] = [];
            if (null !== $this->vSwitchs && \is_array($this->vSwitchs)) {
                $n = 0;
                foreach ($this->vSwitchs as $item) {
                    $res['VSwitchs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchs'])) {
            if (!empty($map['VSwitchs'])) {
                $model->vSwitchs = [];
                $n               = 0;
                foreach ($map['VSwitchs'] as $item) {
                    $model->vSwitchs[$n++] = null !== $item ? vSwitchs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
