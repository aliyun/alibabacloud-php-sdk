<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayBlackWhiteListRequest\filterParams;
use AlibabaCloud\Tea\Model;

class GatewayBlackWhiteListRequest extends Model
{
    /**
     * @description The language in which you want to display the results. Valid values: zh and en. zh indicates Chinese, which is the default value. en indicates English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description This parameter is unavailable for public use.
     *
     * @example ""
     *
     * @var bool
     */
    public $descSort;

    /**
     * @description The filter parameters.
     *
     * @var filterParams
     */
    public $filterParams;

    /**
     * @description This parameter is unavailable for public use.
     *
     * @example ""
     *
     * @var string
     */
    public $orderItem;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'descSort'       => 'DescSort',
        'filterParams'   => 'FilterParams',
        'orderItem'      => 'OrderItem',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->descSort) {
            $res['DescSort'] = $this->descSort;
        }
        if (null !== $this->filterParams) {
            $res['FilterParams'] = null !== $this->filterParams ? $this->filterParams->toMap() : null;
        }
        if (null !== $this->orderItem) {
            $res['OrderItem'] = $this->orderItem;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayBlackWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['DescSort'])) {
            $model->descSort = $map['DescSort'];
        }
        if (isset($map['FilterParams'])) {
            $model->filterParams = filterParams::fromMap($map['FilterParams']);
        }
        if (isset($map['OrderItem'])) {
            $model->orderItem = $map['OrderItem'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
