<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAssociationResponseBody;

use AlibabaCloud\Tea\Model;

class associationList extends Model
{
    /**
     * @description The allowed route prefixes.
     *
     * @var string[]
     */
    public $allowedPrefixes;

    /**
     * @description The prefix route mode. Valid values:
     *
     *   MatchMode
     *   IncrementalMode
     *
     * @example MatchMode
     *
     * @var string
     */
    public $allowedPrefixesMode;

    /**
     * @description The ID of the association between the ECR and the VPC or TR.
     *
     * @example ecr-assoc-9p2qxx5phpca2m****
     *
     * @var string
     */
    public $associationId;

    /**
     * @description The type of the associated resource. Valid values:
     *
     *   **VPC**
     *   **TR**
     *
     * @example VPC
     *
     * @var string
     */
    public $associationNodeType;

    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-5510frtx8zi54q****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The description of the associated resource.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ECR ID.
     *
     * @example ecr-fu8rszhgv7623c****
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
     * @description The ID of the Alibaba Cloud account that owns the resource.
     *
     * @example 167509154715****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The deployment state of the associated resource. Valid values:
     *
     *   **CREATING**: The resource is being created.
     *   **ACTIVE**: The resource is created.
     *   **INACTIVE**: The TR is pending to be associated with the ECR.
     *   **ASSOCIATING**: The resource is being associated.
     *   **DISSOCIATING**: The resource is being disassociated.
     *   **UPDATING**: The resource is being modified.
     *   **DELETING**: The resource is being deleted.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The TR ID.
     *
     * @example tr-2ze4i71c6be454e2l****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The ID of the Alibaba Cloud account that owns the TR.
     *
     * @example 189159362009****
     *
     * @var int
     */
    public $transitRouterOwnerId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-2zeeaxet4i2j1a7n7****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 146757288406****
     *
     * @var int
     */
    public $vpcOwnerId;
    protected $_name = [
        'allowedPrefixes' => 'AllowedPrefixes',
        'allowedPrefixesMode' => 'AllowedPrefixesMode',
        'associationId' => 'AssociationId',
        'associationNodeType' => 'AssociationNodeType',
        'cenId' => 'CenId',
        'description' => 'Description',
        'ecrId' => 'EcrId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'transitRouterId' => 'TransitRouterId',
        'transitRouterOwnerId' => 'TransitRouterOwnerId',
        'vpcId' => 'VpcId',
        'vpcOwnerId' => 'VpcOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedPrefixes) {
            $res['AllowedPrefixes'] = $this->allowedPrefixes;
        }
        if (null !== $this->allowedPrefixesMode) {
            $res['AllowedPrefixesMode'] = $this->allowedPrefixesMode;
        }
        if (null !== $this->associationId) {
            $res['AssociationId'] = $this->associationId;
        }
        if (null !== $this->associationNodeType) {
            $res['AssociationNodeType'] = $this->associationNodeType;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterOwnerId) {
            $res['TransitRouterOwnerId'] = $this->transitRouterOwnerId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcOwnerId) {
            $res['VpcOwnerId'] = $this->vpcOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedPrefixes'])) {
            if (!empty($map['AllowedPrefixes'])) {
                $model->allowedPrefixes = $map['AllowedPrefixes'];
            }
        }
        if (isset($map['AllowedPrefixesMode'])) {
            $model->allowedPrefixesMode = $map['AllowedPrefixesMode'];
        }
        if (isset($map['AssociationId'])) {
            $model->associationId = $map['AssociationId'];
        }
        if (isset($map['AssociationNodeType'])) {
            $model->associationNodeType = $map['AssociationNodeType'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
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
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterOwnerId'])) {
            $model->transitRouterOwnerId = $map['TransitRouterOwnerId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcOwnerId'])) {
            $model->vpcOwnerId = $map['VpcOwnerId'];
        }

        return $model;
    }
}
