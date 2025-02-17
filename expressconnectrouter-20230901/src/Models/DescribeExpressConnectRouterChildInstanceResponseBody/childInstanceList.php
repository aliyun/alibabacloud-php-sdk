<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterChildInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class childInstanceList extends Model
{
    /**
     * @var string
     */
    public $associationId;
    /**
     * @var string
     */
    public $childInstanceId;
    /**
     * @var int
     */
    public $childInstanceOwnerId;
    /**
     * @var string
     */
    public $childInstanceRegionId;
    /**
     * @var string
     */
    public $childInstanceType;
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
    protected $_name = [
        'associationId'         => 'AssociationId',
        'childInstanceId'       => 'ChildInstanceId',
        'childInstanceOwnerId'  => 'ChildInstanceOwnerId',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
        'childInstanceType'     => 'ChildInstanceType',
        'description'           => 'Description',
        'ecrId'                 => 'EcrId',
        'gmtCreate'             => 'GmtCreate',
        'gmtModified'           => 'GmtModified',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'status'                => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
