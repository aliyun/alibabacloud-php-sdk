<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class WhiteIpListRequest extends Model
{
    /**
     * @var string
     */
    public $destAliyunUid;

    /**
     * @var string
     */
    public $destPrimaryVswId;

    /**
     * @var string
     */
    public $destRoleName;

    /**
     * @var string
     */
    public $destSecondaryVswId;

    /**
     * @var string
     */
    public $destVpcId;

    /**
     * @description The HTTP status code.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destinationRegion;

    /**
     * @description The ID of the region where the destination instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * >
     *   If the destination instance is a self-managed database with a public IP address or a third-party cloud database, you can set the parameter to **cn-hangzhou** or the ID of the closest region.
     *   If the DTS task is a data migration or data synchronization task, you must specify this parameter.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The region to which the DTS instance belongs. For more information, see [List of Supported Regions](https://help.aliyun.com/document_detail/141033.html).
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
     * @var string
     */
    public $srcAliyunUid;

    /**
     * @var string
     */
    public $srcPrimaryVswId;

    /**
     * @var string
     */
    public $srcRoleName;

    /**
     * @var string
     */
    public $srcSecondaryVswId;

    /**
     * @var string
     */
    public $srcVpcId;

    /**
     * @description The ID of the region where the source instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * >  If the source instance is a self-managed database with a public IP address or a third-party cloud database, you can set the parameter to **cn-hangzhou** or the ID of the closest region.
     *
     * This parameter is required.
     * @example vpc
     *
     * @var string
     */
    public $type;

    /**
     * @description Whether it is a seamless integration (Zero-ETL) task, the value can be:
     * - **false**: No. - **true**: Yes.
     * @example false
     *
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'destAliyunUid'      => 'DestAliyunUid',
        'destPrimaryVswId'   => 'DestPrimaryVswId',
        'destRoleName'       => 'DestRoleName',
        'destSecondaryVswId' => 'DestSecondaryVswId',
        'destVpcId'          => 'DestVpcId',
        'destinationRegion'  => 'DestinationRegion',
        'region'             => 'Region',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'srcAliyunUid'       => 'SrcAliyunUid',
        'srcPrimaryVswId'    => 'SrcPrimaryVswId',
        'srcRoleName'        => 'SrcRoleName',
        'srcSecondaryVswId'  => 'SrcSecondaryVswId',
        'srcVpcId'           => 'SrcVpcId',
        'type'               => 'Type',
        'zeroEtlJob'         => 'ZeroEtlJob',
    ];

    public function validate()
    {
    }

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
