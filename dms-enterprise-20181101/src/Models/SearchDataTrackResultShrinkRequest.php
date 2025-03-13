<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SearchDataTrackResultShrinkRequest extends Model
{
    /**
     * @description The condition to filter columns.
     *
     * @var string
     */
    public $columnFilterShrink;

    /**
     * @description The end time of the time range in which you want to track data operations. The time must be in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2023-04-23 10:00:00
     *
     * @var string
     */
    public $filterEndTime;

    /**
     * @description The start time of the time range in which you want to track data operations. The time must be in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2023-04-23 00:00:00
     *
     * @var string
     */
    public $filterStartTime;

    /**
     * @description The names of the tables for which you want to track data operations.
     *
     * @var string
     */
    public $filterTableListShrink;

    /**
     * @description The types of data operations that you want to track.
     *
     * @var string
     */
    public $filterTypeListShrink;

    /**
     * @description The ID of the ticket. You can call the [ListOrders](https://help.aliyun.com/document_detail/144643.html) operation to query the ticket ID.
     *
     * This parameter is required.
     *
     * @example 420****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to query the tenant ID.
     *
     * @example 62***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnFilterShrink' => 'ColumnFilter',
        'filterEndTime' => 'FilterEndTime',
        'filterStartTime' => 'FilterStartTime',
        'filterTableListShrink' => 'FilterTableList',
        'filterTypeListShrink' => 'FilterTypeList',
        'orderId' => 'OrderId',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnFilterShrink) {
            $res['ColumnFilter'] = $this->columnFilterShrink;
        }
        if (null !== $this->filterEndTime) {
            $res['FilterEndTime'] = $this->filterEndTime;
        }
        if (null !== $this->filterStartTime) {
            $res['FilterStartTime'] = $this->filterStartTime;
        }
        if (null !== $this->filterTableListShrink) {
            $res['FilterTableList'] = $this->filterTableListShrink;
        }
        if (null !== $this->filterTypeListShrink) {
            $res['FilterTypeList'] = $this->filterTypeListShrink;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchDataTrackResultShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnFilter'])) {
            $model->columnFilterShrink = $map['ColumnFilter'];
        }
        if (isset($map['FilterEndTime'])) {
            $model->filterEndTime = $map['FilterEndTime'];
        }
        if (isset($map['FilterStartTime'])) {
            $model->filterStartTime = $map['FilterStartTime'];
        }
        if (isset($map['FilterTableList'])) {
            $model->filterTableListShrink = $map['FilterTableList'];
        }
        if (isset($map['FilterTypeList'])) {
            $model->filterTypeListShrink = $map['FilterTypeList'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
