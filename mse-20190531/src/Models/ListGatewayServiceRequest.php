<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceRequest\filterParams;
use AlibabaCloud\Tea\Model;

class ListGatewayServiceRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Specifies whether to enable sorting.
     *
     * @example false
     *
     * @var bool
     */
    public $descSort;

    /**
     * @description The parameters that are used to specify filter conditions. The values of the parameters are in the format of {"key1":"value1"}.
     *
     * @var filterParams
     */
    public $filterParams;

    /**
     * @description The item based on which entries are sorted.
     *
     * @example GmtCreate
     *
     * @var string
     */
    public $orderItem;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
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
     * @return ListGatewayServiceRequest
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
