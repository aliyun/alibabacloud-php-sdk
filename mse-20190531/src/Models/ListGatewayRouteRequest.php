<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteRequest\filterParams;
use AlibabaCloud\Tea\Model;

class ListGatewayRouteRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $descSort;

    /**
     * @var filterParams
     */
    public $filterParams;

    /**
     * @var string
     */
    public $mseSessionId;

    /**
     * @var string
     */
    public $orderItem;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'descSort'       => 'DescSort',
        'filterParams'   => 'FilterParams',
        'mseSessionId'   => 'MseSessionId',
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
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
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
     * @return ListGatewayRouteRequest
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
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
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
