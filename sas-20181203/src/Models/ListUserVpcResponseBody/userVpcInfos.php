<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUserVpcResponseBody;

use AlibabaCloud\Tea\Model;

class userVpcInfos extends Model
{
    /**
     * @description IPv4 network segment of the VPC.
     *
     * @example 192.168.XXX.XXX/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description Creation time.
     *
     * @example 2023-03-30T07:16:02Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether it is the default VPC in the region. Values:
     * - **true**: Yes - **false**: No
     *
     * @example true
     *
     * @var bool
     */
    public $default;

    /**
     * @description Description of the VPC.
     *
     * @example This is my VPC.
     *
     * @var string
     */
    public $description;

    /**
     * @description Modification time.
     *
     * @example 2023-03-30T07:16:02Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description Region
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Status of the VPC. Values:
     *
     * - **Pending**: Configuring
     * - **Available**: Available
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description ID of the VPC router.
     *
     * @example vrt-bp1jcg5cmxjbl9xgc****
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description ID of the VPC.
     *
     * @example vpc-bp1qpo0kug3a20qqe****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Name of the VPC.
     *
     * @example Vpc-1
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'creationTime' => 'CreationTime',
        'default' => 'Default',
        'description' => 'Description',
        'modifyTime' => 'ModifyTime',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'VRouterId' => 'VRouterId',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
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
     * @return userVpcInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
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
