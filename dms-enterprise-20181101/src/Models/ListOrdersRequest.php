<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListOrdersRequest extends Model
{
    /**
     * @description The user who submitted the ticket.
     *
     * @example 2022-04-09 11:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The end of the time range to query.
     *
     * @example AS_ADMIN
     *
     * @var string
     */
    public $orderResultType;

    /**
     * @description The type of the tickets that you want to query. For more information, see [PluginType parameter](~~429109~~).
     *
     * @example ALL
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @description The keyword that is used to query tickets.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The scope of the tickets that you want to query. Valid values:
     *
     *   **AS_ADMIN**: all tickets.
     *   **AS_COMMITTER**: the tickets that are submitted by the current user.
     *   **AS_HANDLER**: the tickets to be processed by the current user.
     *   **AS_OWNER**: the tickets that are processed by the current user.
     *   **AS_Related**: the tickets that are related to the current user.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the user who submitted the ticket.
     *
     * @example DC_COMMON
     *
     * @var string
     */
    public $pluginType;

    /**
     * @description The status of the tickets that you want to query. Valid values:
     *
     *   **ALL**: queries the tickets of all statuses.
     *   **FINISHED**: queries the tickets that are completed.
     *   **RUNNING**: queries the tickets that are being processed.
     *
     * @example test
     *
     * @var string
     */
    public $searchContent;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example CREATE_TIME
     *
     * @var string
     */
    public $searchDateType;

    /**
     * @description The remarks of the ticket.
     *
     * @example 2022-04-08 11:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The beginning of the time range to query.
     *
     * @example 3000
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'endTime'         => 'EndTime',
        'orderResultType' => 'OrderResultType',
        'orderStatus'     => 'OrderStatus',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'pluginType'      => 'PluginType',
        'searchContent'   => 'SearchContent',
        'searchDateType'  => 'SearchDateType',
        'startTime'       => 'StartTime',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->orderResultType) {
            $res['OrderResultType'] = $this->orderResultType;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->searchContent) {
            $res['SearchContent'] = $this->searchContent;
        }
        if (null !== $this->searchDateType) {
            $res['SearchDateType'] = $this->searchDateType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OrderResultType'])) {
            $model->orderResultType = $map['OrderResultType'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['SearchContent'])) {
            $model->searchContent = $map['SearchContent'];
        }
        if (isset($map['SearchDateType'])) {
            $model->searchDateType = $map['SearchDateType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
