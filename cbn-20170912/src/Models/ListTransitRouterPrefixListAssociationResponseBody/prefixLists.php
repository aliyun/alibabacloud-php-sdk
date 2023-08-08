<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPrefixListAssociationResponseBody;

use AlibabaCloud\Tea\Model;

class prefixLists extends Model
{
    /**
     * @description The ID of the next hop.
     *
     * > A value of **BlackHole** indicates that all the CIDR blocks in the prefix list are blackhole routes. Packets destined for the CIDR blocks are dropped.
     * @example tr-attach-flbq507rg2ckrj****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The ID of the network instance associated with the next hop connection.
     *
     * @example vpc-6eh7fp9hdqa2wv85t****
     *
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @description The type of the next hop. Valid values:
     *
     *   **BlackHole**: All the CIDR blocks in the prefix list are blackhole routes. Packets destined for the CIDR blocks are dropped.
     *   **VPC**: The next hop of the CIDR blocks in the prefix list is a VPC connection.
     *   **VBR**: The next hop of the CIDR blocks in the prefix list is a VBR connection.
     *   **TR**: The next hop of the CIDR blocks in the prefix list is an inter-region connection.
     *
     * @example VPC
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The ID of the Alibaba Cloud account to which the prefix list belongs.
     *
     * @example 1210123456123456
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description The ID of the prefix list.
     *
     * @example pl-6ehtn5kqxgeyy08fi****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The status of the prefix list. Valid values:
     *
     *   **Active**: The prefix list is effective.
     *   **Updating**: The prefix list is being updated.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-6ehx7q2jze8ch5ji0****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The ID of the route table of the transit router.
     *
     * @example vtb-6ehgc262hr170qgyc****
     *
     * @var string
     */
    public $transitRouterTableId;
    protected $_name = [
        'nextHop'              => 'NextHop',
        'nextHopInstanceId'    => 'NextHopInstanceId',
        'nextHopType'          => 'NextHopType',
        'ownerUid'             => 'OwnerUid',
        'prefixListId'         => 'PrefixListId',
        'status'               => 'Status',
        'transitRouterId'      => 'TransitRouterId',
        'transitRouterTableId' => 'TransitRouterTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return prefixLists
     */
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
