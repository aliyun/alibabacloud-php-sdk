<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class DescribeExpressConnectRouterAssociationRequest extends Model
{
    /**
     * @example ecr-assoc-9p2qxx5phpca2m****
     *
     * @var string
     */
    public $associationId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $associationNodeType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $associationRegionId;

    /**
     * @example cen-of3o1the3i4gwb****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example tr-2ze4i71c6be454e2l****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @example vpc-bp1h37fchc6jmfyln****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associationId'       => 'AssociationId',
        'associationNodeType' => 'AssociationNodeType',
        'associationRegionId' => 'AssociationRegionId',
        'cenId'               => 'CenId',
        'clientToken'         => 'ClientToken',
        'dryRun'              => 'DryRun',
        'ecrId'               => 'EcrId',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'transitRouterId'     => 'TransitRouterId',
        'vpcId'               => 'VpcId',
    ];

    public function validate()
    {
    }

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
