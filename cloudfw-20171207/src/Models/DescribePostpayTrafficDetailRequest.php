<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribePostpayTrafficDetailRequest extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     * @example 1656923760
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The field based on which you want to sort the query results. Valid values:
     *
     *   **resourceId**
     *   **trafficDay**
     *
     * @example resourceId
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The instance ID or the IP address of the asset.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $searchItem;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     * @example 1656750960
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The traffic type. This parameter is required. Valid values:
     *
     *   **EIP_TRAFFIC**: traffic for the Internet firewall
     *   **NatGateway_TRAFFIC**: traffic for the NAT firewall
     *
     * This parameter is required.
     * @example EIP_TRAFFIC
     *
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'lang'        => 'Lang',
        'order'       => 'Order',
        'pageSize'    => 'PageSize',
        'searchItem'  => 'SearchItem',
        'startTime'   => 'StartTime',
        'trafficType' => 'TrafficType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePostpayTrafficDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }

        return $model;
    }
}
