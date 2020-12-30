<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class GetRegionListRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $total;

    /**
     * @var string
     */
    public $offset;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $offsetCreateTime;

    /**
     * @var string
     */
    public $offsetCreateTimeDesc;

    /**
     * @var string
     */
    public $pageNumber;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'total'                => 'Total',
        'offset'               => 'Offset',
        'pageSize'             => 'PageSize',
        'offsetCreateTime'     => 'OffsetCreateTime',
        'offsetCreateTimeDesc' => 'OffsetCreateTimeDesc',
        'pageNumber'           => 'PageNumber',
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->offsetCreateTime) {
            $res['OffsetCreateTime'] = $this->offsetCreateTime;
        }
        if (null !== $this->offsetCreateTimeDesc) {
            $res['OffsetCreateTimeDesc'] = $this->offsetCreateTimeDesc;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegionListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['OffsetCreateTime'])) {
            $model->offsetCreateTime = $map['OffsetCreateTime'];
        }
        if (isset($map['OffsetCreateTimeDesc'])) {
            $model->offsetCreateTimeDesc = $map['OffsetCreateTimeDesc'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
