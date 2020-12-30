<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\vpcInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\vpcInfoList\vpcInfo\vswitchInfoList;
use AlibabaCloud\Tea\Model;

class vpcInfo extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $description;

    /**
     * @var vswitchInfoList
     */
    public $vswitchInfoList;
    protected $_name = [
        'vpcId'           => 'VpcId',
        'vpcName'         => 'VpcName',
        'creationTime'    => 'CreationTime',
        'VRouterId'       => 'VRouterId',
        'cidrBlock'       => 'CidrBlock',
        'description'     => 'Description',
        'vswitchInfoList' => 'VswitchInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->vswitchInfoList) {
            $res['VswitchInfoList'] = null !== $this->vswitchInfoList ? $this->vswitchInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VswitchInfoList'])) {
            $model->vswitchInfoList = vswitchInfoList::fromMap($map['VswitchInfoList']);
        }

        return $model;
    }
}
