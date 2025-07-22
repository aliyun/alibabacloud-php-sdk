<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterChildInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class childInstanceList extends Model
{
    /**
     * @description The ID of the association between the ECR and the VPC or TR.
     *
     * @example ecr-assoc-9p2qxx5phpca2m****
     *
     * @var string
     */
    public $associationId;

    /**
     * @description The VBR ID.
     *
     * @example vbr-gw8vjq2zjux3ifsc9****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account that owns the VBR.
     *
     * @example 112101171212****
     *
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @description The region ID of the VBR.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description The type of the VBR. The value is **VBR**.
     *
     * @example VBR
     *
     * @var string
     */
    public $childInstanceType;

    /**
     * @description The description of the ECR.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ECR ID.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The time when the association was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-01-09T12:18:23Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the association was modified. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-01-09T12:18:23Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the Alibaba Cloud account that owns the VBR.
     *
     * @example 167509154715****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the VBR.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The deployment state of the associated resource. Valid values:
     *
     * - **CREATING**: The resource is being created.
     * - **ACTIVE**: The resource is created.
     * - **ASSOCIATING**: The resource is being associated.
     * - **DISSOCIATING**: The resource is being disassociated.
     * - **UPDATING**: The resource is being modified.
     * - **DELETING**: The resource is being deleted.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'associationId' => 'AssociationId',
        'childInstanceId' => 'ChildInstanceId',
        'childInstanceOwnerId' => 'ChildInstanceOwnerId',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
        'childInstanceType' => 'ChildInstanceType',
        'description' => 'Description',
        'ecrId' => 'EcrId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationId) {
            $res['AssociationId'] = $this->associationId;
        }
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->childInstanceOwnerId) {
            $res['ChildInstanceOwnerId'] = $this->childInstanceOwnerId;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationId'])) {
            $model->associationId = $map['AssociationId'];
        }
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['ChildInstanceOwnerId'])) {
            $model->childInstanceOwnerId = $map['ChildInstanceOwnerId'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
