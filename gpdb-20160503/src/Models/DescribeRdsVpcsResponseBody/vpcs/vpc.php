<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody\vpcs;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody\vpcs\vpc\vSwitchs;
use AlibabaCloud\Tea\Model;

class vpc extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var vSwitchs[]
     */
    public $vSwitchs;

    /**
     * @var string
     */
    public $vpcId;

    /**
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
