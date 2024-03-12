<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressConnectRouterAssociationRequest extends Model
{
    /**
     * @var string[]
     */
    public $allowedPrefixes;

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
     * @example true
     *
     * @var bool
     */
    public $createAttachment;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example tr-2ze4i71c6be454e2l****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @example 189159362009****
     *
     * @var int
     */
    public $transitRouterOwnerId;

    /**
     * @example vpc-bp1h37fchc6jmfyln****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example 132193271328****
     *
     * @var int
     */
    public $vpcOwnerId;
    protected $_name = [
        'allowedPrefixes'      => 'AllowedPrefixes',
        'associationRegionId'  => 'AssociationRegionId',
        'cenId'                => 'CenId',
        'clientToken'          => 'ClientToken',
        'createAttachment'     => 'CreateAttachment',
        'dryRun'               => 'DryRun',
        'ecrId'                => 'EcrId',
        'transitRouterId'      => 'TransitRouterId',
        'transitRouterOwnerId' => 'TransitRouterOwnerId',
        'vpcId'                => 'VpcId',
        'vpcOwnerId'           => 'VpcOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedPrefixes) {
            $res['AllowedPrefixes'] = $this->allowedPrefixes;
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
