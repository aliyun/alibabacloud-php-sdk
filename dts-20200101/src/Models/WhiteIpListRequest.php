<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class WhiteIpListRequest extends Model
{
    /**
     * @description destination aliyun uid
     *
     * @example ****
     *
     * @var string
     */
    public $destAliyunUid;

    /**
     * @description VPCNAT destination main VSW
     *
     * @example ****
     *
     * @var string
     */
    public $destPrimaryVswId;

    /**
     * @description destination role name
     *
     * @example ram-for-dts-sq
     *
     * @var string
     */
    public $destRoleName;

    /**
     * @description VPCNAT destination backup VSW
     *
     * @example ****
     *
     * @var string
     */
    public $destSecondaryVswId;

    /**
     * @description source vpc id
     *
     * @example ****
     *
     * @var string
     */
    public $destVpcId;

    /**
     * @description The region ID to which the target instance belongs, please refer to the supported region list for details.
     * >>If the target instance is a self built database or third-party cloud database with a public IP address, you can pass in the cn Hangzhou or the region ID closest to the physical distance of the database.
     * - When the DTS task is migration or synchronization, this parameter must be passed in.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destinationRegion;

    /**
     * @description The region ID of the change tracking instance. The region ID is the same as that of the source instance. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the region where the change tracking instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-aek26mat2ldb4oy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description source aliyun uid
     *
     * @example 1971721963139419
     *
     * @var string
     */
    public $srcAliyunUid;

    /**
     * @description VPCNAT source end main VSW
     *
     * @example ****
     *
     * @var string
     */
    public $srcPrimaryVswId;

    /**
     * @description source role Name
     *
     * @example ram-for-dts
     *
     * @var string
     */
    public $srcRoleName;

    /**
     * @description VPCNAT source backup VSW
     *
     * @example ****
     *
     * @var string
     */
    public $srcSecondaryVswId;

    /**
     * @description source vpc id
     *
     * @example ****
     *
     * @var string
     */
    public $srcVpcId;

    /**
     * @description The access method for self built databases or third-party cloud databases, with a value of
     * - Internet: accessed through the public network.
     * - VPC: Connected through dedicated line/VPN gateway/intelligent gateway.
     *
     * This parameter is required.
     *
     * @example vpc
     *
     * @var string
     */
    public $type;

    /**
     * @description Whether it is a seamless integration (Zero-ETL) task, the value can be:
     * - **false**: No. - **true**: Yes.
     *
     * @example false
     *
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'destAliyunUid' => 'DestAliyunUid',
        'destPrimaryVswId' => 'DestPrimaryVswId',
        'destRoleName' => 'DestRoleName',
        'destSecondaryVswId' => 'DestSecondaryVswId',
        'destVpcId' => 'DestVpcId',
        'destinationRegion' => 'DestinationRegion',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'srcAliyunUid' => 'SrcAliyunUid',
        'srcPrimaryVswId' => 'SrcPrimaryVswId',
        'srcRoleName' => 'SrcRoleName',
        'srcSecondaryVswId' => 'SrcSecondaryVswId',
        'srcVpcId' => 'SrcVpcId',
        'type' => 'Type',
        'zeroEtlJob' => 'ZeroEtlJob',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->destAliyunUid) {
            $res['DestAliyunUid'] = $this->destAliyunUid;
        }
        if (null !== $this->destPrimaryVswId) {
            $res['DestPrimaryVswId'] = $this->destPrimaryVswId;
        }
        if (null !== $this->destRoleName) {
            $res['DestRoleName'] = $this->destRoleName;
        }
        if (null !== $this->destSecondaryVswId) {
            $res['DestSecondaryVswId'] = $this->destSecondaryVswId;
        }
        if (null !== $this->destVpcId) {
            $res['DestVpcId'] = $this->destVpcId;
        }
        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->srcAliyunUid) {
            $res['SrcAliyunUid'] = $this->srcAliyunUid;
        }
        if (null !== $this->srcPrimaryVswId) {
            $res['SrcPrimaryVswId'] = $this->srcPrimaryVswId;
        }
        if (null !== $this->srcRoleName) {
            $res['SrcRoleName'] = $this->srcRoleName;
        }
        if (null !== $this->srcSecondaryVswId) {
            $res['SrcSecondaryVswId'] = $this->srcSecondaryVswId;
        }
        if (null !== $this->srcVpcId) {
            $res['SrcVpcId'] = $this->srcVpcId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WhiteIpListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestAliyunUid'])) {
            $model->destAliyunUid = $map['DestAliyunUid'];
        }
        if (isset($map['DestPrimaryVswId'])) {
            $model->destPrimaryVswId = $map['DestPrimaryVswId'];
        }
        if (isset($map['DestRoleName'])) {
            $model->destRoleName = $map['DestRoleName'];
        }
        if (isset($map['DestSecondaryVswId'])) {
            $model->destSecondaryVswId = $map['DestSecondaryVswId'];
        }
        if (isset($map['DestVpcId'])) {
            $model->destVpcId = $map['DestVpcId'];
        }
        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SrcAliyunUid'])) {
            $model->srcAliyunUid = $map['SrcAliyunUid'];
        }
        if (isset($map['SrcPrimaryVswId'])) {
            $model->srcPrimaryVswId = $map['SrcPrimaryVswId'];
        }
        if (isset($map['SrcRoleName'])) {
            $model->srcRoleName = $map['SrcRoleName'];
        }
        if (isset($map['SrcSecondaryVswId'])) {
            $model->srcSecondaryVswId = $map['SrcSecondaryVswId'];
        }
        if (isset($map['SrcVpcId'])) {
            $model->srcVpcId = $map['SrcVpcId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
