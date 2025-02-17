<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAssociationResponseBody;

use AlibabaCloud\Dara\Model;

class associationList extends Model
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
    public $associationId;
    /**
     * @var string
     */
    public $associationNodeType;
    /**
     * @var string
     */
    public $cenId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $ecrId;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $status;
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
    public $vpcId;
    /**
     * @var int
     */
    public $vpcOwnerId;
    protected $_name = [
        'allowedPrefixes'      => 'AllowedPrefixes',
        'allowedPrefixesMode'  => 'AllowedPrefixesMode',
        'associationId'        => 'AssociationId',
        'associationNodeType'  => 'AssociationNodeType',
        'cenId'                => 'CenId',
        'description'          => 'Description',
        'ecrId'                => 'EcrId',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'status'               => 'Status',
        'transitRouterId'      => 'TransitRouterId',
        'transitRouterOwnerId' => 'TransitRouterOwnerId',
        'vpcId'                => 'VpcId',
        'vpcOwnerId'           => 'VpcOwnerId',
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
                $n1                     = 0;
                foreach ($this->allowedPrefixes as $item1) {
                    $res['AllowedPrefixes'][$n1++] = $item1;
                }
            }
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
                $n1                     = 0;
                foreach ($map['AllowedPrefixes'] as $item1) {
                    $model->allowedPrefixes[$n1++] = $item1;
                }
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
