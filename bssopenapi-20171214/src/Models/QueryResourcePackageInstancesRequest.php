<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryResourcePackageInstancesRequest extends Model
{
    /**
     * @example 2020-02-02T13:00:00Z
     *
     * @var string
     */
    public $expiryTimeEnd;

    /**
     * @example 2020-02-02T12:00:00Z
     *
     * @var string
     */
    public $expiryTimeStart;

    /**
     * @example true
     *
     * @var bool
     */
    public $includePartner;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example rds
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'expiryTimeEnd'   => 'ExpiryTimeEnd',
        'expiryTimeStart' => 'ExpiryTimeStart',
        'includePartner'  => 'IncludePartner',
        'ownerId'         => 'OwnerId',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'productCode'     => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiryTimeEnd) {
            $res['ExpiryTimeEnd'] = $this->expiryTimeEnd;
        }
        if (null !== $this->expiryTimeStart) {
            $res['ExpiryTimeStart'] = $this->expiryTimeStart;
        }
        if (null !== $this->includePartner) {
            $res['IncludePartner'] = $this->includePartner;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryResourcePackageInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryTimeEnd'])) {
            $model->expiryTimeEnd = $map['ExpiryTimeEnd'];
        }
        if (isset($map['ExpiryTimeStart'])) {
            $model->expiryTimeStart = $map['ExpiryTimeStart'];
        }
        if (isset($map['IncludePartner'])) {
            $model->includePartner = $map['IncludePartner'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
