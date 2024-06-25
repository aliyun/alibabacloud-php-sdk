<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryPageSmartShortUrlLogRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 20181225
     *
     * @var int
     */
    public $createDateEnd;

    /**
     * @description This parameter is required.
     *
     * @example 20181225
     *
     * @var int
     */
    public $createDateStart;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1390000****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example http://ays.cn/****
     *
     * @var string
     */
    public $shortUrl;
    protected $_name = [
        'createDateEnd'        => 'CreateDateEnd',
        'createDateStart'      => 'CreateDateStart',
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'phoneNumber'          => 'PhoneNumber',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'shortUrl'             => 'ShortUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDateEnd) {
            $res['CreateDateEnd'] = $this->createDateEnd;
        }
        if (null !== $this->createDateStart) {
            $res['CreateDateStart'] = $this->createDateStart;
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
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->shortUrl) {
            $res['ShortUrl'] = $this->shortUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPageSmartShortUrlLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDateEnd'])) {
            $model->createDateEnd = $map['CreateDateEnd'];
        }
        if (isset($map['CreateDateStart'])) {
            $model->createDateStart = $map['CreateDateStart'];
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
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ShortUrl'])) {
            $model->shortUrl = $map['ShortUrl'];
        }

        return $model;
    }
}
