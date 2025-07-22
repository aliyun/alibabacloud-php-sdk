<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressConnectRouterAssociationRequest extends Model
{
    /**
     * @description The allowed route prefixes.
     *
     * @var string[]
     */
    public $allowedPrefixes;

    /**
     * @description The route prefix mode. Valid values:
     *
     * - **MatchMode**: After you distribute new route CIDR blocks to data centers, original specific routes that are distributed are withdrawn.
     *
     * - **IncrementalMode**: After you distribute new route CIDR blocks to data centers, the original specific routes that fall in the CIDR blocks that you configure are withdrawn, and the original specific routes that do not fall in the CIDR blocks are still distributed.
     *
     * @example MatchMode
     *
     * @var string
     */
    public $allowedPrefixesMode;

    /**
     * @description The region ID of the resource to be associated.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $associationRegionId;

    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example cen-of3o1the3i4gwb****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to initiate an association on the TR when the ECR is associated with the TR. Valid values:
     *
     *   **true**: You do not need to initiate an association on the TR.
     *   **false**: You need to initiate an association on the TR.
     *
     * @example true
     *
     * @var bool
     */
    public $createAttachment;

    /**
     * @description The information about the associated resource. It must be 0 to 128 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run.
     *   **false** (default): performs a dry run and performs the actual request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ECR ID.
     *
     * This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The TR ID.
     *
     * @example tr-2ze4i71c6be454e2l****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The ID of the Alibaba Cloud account that owns the TR. Default value: ID of the Alibaba Cloud account that logs in.
     *
     * >  If you want to connect to a network instance that belongs to a different account, this parameter is required.
     *
     * @example 189159362009****
     *
     * @var int
     */
    public $transitRouterOwnerId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1h37fchc6jmfyln****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the Alibaba Cloud account that owns the VPC. Default value: ID of the Alibaba Cloud account that logs in.
     *
     * >  If you want to connect to a network instance that belongs to a different account, this parameter is required.
     *
     * @example 132193271328****
     *
     * @var int
     */
    public $vpcOwnerId;
    protected $_name = [
        'allowedPrefixes' => 'AllowedPrefixes',
        'allowedPrefixesMode' => 'AllowedPrefixesMode',
        'associationRegionId' => 'AssociationRegionId',
        'cenId' => 'CenId',
        'clientToken' => 'ClientToken',
        'createAttachment' => 'CreateAttachment',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
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
        if (null !== $this->associationRegionId) {
            $res['AssociationRegionId'] = $this->associationRegionId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->createAttachment) {
            $res['CreateAttachment'] = $this->createAttachment;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
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
     * @return CreateExpressConnectRouterAssociationRequest
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
        if (isset($map['AssociationRegionId'])) {
            $model->associationRegionId = $map['AssociationRegionId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CreateAttachment'])) {
            $model->createAttachment = $map['CreateAttachment'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
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
