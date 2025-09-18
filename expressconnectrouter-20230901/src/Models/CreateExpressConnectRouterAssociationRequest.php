<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;

class CreateExpressConnectRouterAssociationRequest extends Model
{
    /**
     * @var string[]
     */
    public $allowedPrefixes;

    /**
     * @var string
     */
    public $allowedPrefixesMode;

    /**
     * @var string
     */
    public $associationRegionId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $createAttachment;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ecrId;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var int
     */
    public $transitRouterOwnerId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;

    /**
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
        'version' => 'Version',
        'vpcId' => 'VpcId',
        'vpcOwnerId' => 'VpcOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->allowedPrefixes)) {
            Model::validateArray($this->allowedPrefixes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedPrefixes) {
            if (\is_array($this->allowedPrefixes)) {
                $res['AllowedPrefixes'] = [];
                $n1 = 0;
                foreach ($this->allowedPrefixes as $item1) {
                    $res['AllowedPrefixes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcOwnerId) {
            $res['VpcOwnerId'] = $this->vpcOwnerId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedPrefixes'])) {
            if (!empty($map['AllowedPrefixes'])) {
                $model->allowedPrefixes = [];
                $n1 = 0;
                foreach ($map['AllowedPrefixes'] as $item1) {
                    $model->allowedPrefixes[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
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
