<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssuesRequest\filter;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssuesRequest\timeRange;

class GetIssuesRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;
    /**
     * @var string
     */
    public $bizModule;
    /**
     * @var filter
     */
    public $filter;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var string
     */
    public $orderType;
    /**
     * @var string
     */
    public $os;
    /**
     * @var int
     */
    public $pageIndex;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $status;
    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'appKey'    => 'AppKey',
        'bizModule' => 'BizModule',
        'filter'    => 'Filter',
        'name'      => 'Name',
        'orderBy'   => 'OrderBy',
        'orderType' => 'OrderType',
        'os'        => 'Os',
        'pageIndex' => 'PageIndex',
        'pageSize'  => 'PageSize',
        'status'    => 'Status',
        'timeRange' => 'TimeRange',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->bizModule) {
            $res['BizModule'] = $this->bizModule;
        }

        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timeRange) {
            $res['TimeRange'] = null !== $this->timeRange ? $this->timeRange->toArray($noStream) : $this->timeRange;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['BizModule'])) {
            $model->bizModule = $map['BizModule'];
        }

        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TimeRange'])) {
            $model->timeRange = timeRange::fromMap($map['TimeRange']);
        }

        return $model;
    }
}
