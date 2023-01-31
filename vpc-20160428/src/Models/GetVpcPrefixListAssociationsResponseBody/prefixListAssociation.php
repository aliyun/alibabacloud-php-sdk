<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListAssociationsResponseBody;

use AlibabaCloud\Tea\Model;

class prefixListAssociation extends Model
{
    /**
     * @example 153460731706****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example pl-0b7hwu67****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @example failed
     *
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @example vtb-bp1drpcfz9srr393h****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example vpcRouteTable
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceUid;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ownerId'      => 'OwnerId',
        'prefixListId' => 'PrefixListId',
        'reason'       => 'Reason',
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'resourceUid'  => 'ResourceUid',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prefixListAssociation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
