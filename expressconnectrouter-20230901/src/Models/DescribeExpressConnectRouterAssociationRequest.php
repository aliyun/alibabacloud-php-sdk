<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class DescribeExpressConnectRouterAssociationRequest extends Model
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
     * @description The region ID of the VPC or TR.
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
     * @description The maximum number of entries to read. Valid values: 1 to 2147483647. Default value: 20.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The TR ID.
     *
     * @example tr-2ze4i71c6be454e2l****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1h37fchc6jmfyln****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associationId' => 'AssociationId',
        'associationNodeType' => 'AssociationNodeType',
        'associationRegionId' => 'AssociationRegionId',
        'cenId' => 'CenId',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'transitRouterId' => 'TransitRouterId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationId) {
            $res['AssociationId'] = $this->associationId;
        }
        if (null !== $this->associationNodeType) {
            $res['AssociationNodeType'] = $this->associationNodeType;
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExpressConnectRouterAssociationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationId'])) {
            $model->associationId = $map['AssociationId'];
        }
        if (isset($map['AssociationNodeType'])) {
            $model->associationNodeType = $map['AssociationNodeType'];
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
