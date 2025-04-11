<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPrefixListAssociationResponseBody;

use AlibabaCloud\Dara\Model;

class prefixLists extends Model
{
    /**
     * @var string
     */
    public $nextHop;

    /**
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var int
     */
    public $ownerUid;

    /**
     * @var string
     */
    public $prefixListId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var string
     */
    public $transitRouterTableId;
    protected $_name = [
        'nextHop' => 'NextHop',
        'nextHopInstanceId' => 'NextHopInstanceId',
        'nextHopType' => 'NextHopType',
        'ownerUid' => 'OwnerUid',
        'prefixListId' => 'PrefixListId',
        'status' => 'Status',
        'transitRouterId' => 'TransitRouterId',
        'transitRouterTableId' => 'TransitRouterTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }

        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
        }

        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }

        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }

        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        if (null !== $this->transitRouterTableId) {
            $res['TransitRouterTableId'] = $this->transitRouterTableId;
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
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
        }

        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }

        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }

        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        if (isset($map['TransitRouterTableId'])) {
            $model->transitRouterTableId = $map['TransitRouterTableId'];
        }

        return $model;
    }
}
