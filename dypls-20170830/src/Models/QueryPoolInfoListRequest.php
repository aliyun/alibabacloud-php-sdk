<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class QueryPoolInfoListRequest extends Model
{
    /**
     * @var bool
     */
    public $isFuzzyQuery;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pageNo;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $poolName;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $resType;

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
    public $searchParam;
    protected $_name = [
        'isFuzzyQuery'         => 'IsFuzzyQuery',
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'poolName'             => 'PoolName',
        'prodCode'             => 'ProdCode',
        'resType'              => 'ResType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'searchParam'          => 'SearchParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isFuzzyQuery) {
            $res['IsFuzzyQuery'] = $this->isFuzzyQuery;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->resType) {
            $res['ResType'] = $this->resType;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->searchParam) {
            $res['SearchParam'] = $this->searchParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPoolInfoListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsFuzzyQuery'])) {
            $model->isFuzzyQuery = $map['IsFuzzyQuery'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['ResType'])) {
            $model->resType = $map['ResType'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SearchParam'])) {
            $model->searchParam = $map['SearchParam'];
        }

        return $model;
    }
}
