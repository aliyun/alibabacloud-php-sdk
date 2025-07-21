<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class QueryMailAddressByParamRequest extends Model
{
    /**
     * @description Email address, length 1-60, supports numbers, letters, ., -, @.
     *
     * @example sender@example.com
     *
     * @var string
     */
    public $keyWord;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Current page number, default: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Page size, default: 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Sending address type. Values:
     *
     * - batch: bulk email
     * - trigger: triggered email
     *
     * @example batch
     *
     * @var string
     */
    public $sendtype;
    protected $_name = [
        'keyWord' => 'KeyWord',
        'ownerId' => 'OwnerId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sendtype' => 'Sendtype',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sendtype) {
            $res['Sendtype'] = $this->sendtype;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMailAddressByParamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Sendtype'])) {
            $model->sendtype = $map['Sendtype'];
        }

        return $model;
    }
}
