<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryRedeemRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $effectiveOrNot;

    /**
     * @example 2018-08-01T00:00:00Z
     *
     * @var string
     */
    public $expiryTimeEnd;

    /**
     * @example 2018-08-01T00:00:00Z
     *
     * @var string
     */
    public $expiryTimeStart;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'effectiveOrNot'  => 'EffectiveOrNot',
        'expiryTimeEnd'   => 'ExpiryTimeEnd',
        'expiryTimeStart' => 'ExpiryTimeStart',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveOrNot) {
            $res['EffectiveOrNot'] = $this->effectiveOrNot;
        }
        if (null !== $this->expiryTimeEnd) {
            $res['ExpiryTimeEnd'] = $this->expiryTimeEnd;
        }
        if (null !== $this->expiryTimeStart) {
            $res['ExpiryTimeStart'] = $this->expiryTimeStart;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRedeemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveOrNot'])) {
            $model->effectiveOrNot = $map['EffectiveOrNot'];
        }
        if (isset($map['ExpiryTimeEnd'])) {
            $model->expiryTimeEnd = $map['ExpiryTimeEnd'];
        }
        if (isset($map['ExpiryTimeStart'])) {
            $model->expiryTimeStart = $map['ExpiryTimeStart'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
