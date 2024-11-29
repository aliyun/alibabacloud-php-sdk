<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVpcsResponseBody\vpcs;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVpcsResponseBody\vpcs\vpc\vSwitchs;
use AlibabaCloud\Tea\Model;

class vpc extends Model
{
    /**
     * @example 1431771514176727
     *
     * @var string
     */
    public $aliUid;

    /**
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @example 1693217052000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1724639118000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @var vSwitchs[]
     */
    public $vSwitchs;

    /**
     * @example vpc-uf6m0r5pihw1r79od6990
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vpc1
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
