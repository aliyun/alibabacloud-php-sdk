<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssuesShrinkRequest\timeRange;

class GetIssuesShrinkRequest extends Model
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
     * @var string
     */
    public $filterShrink;
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
        'appKey'       => 'AppKey',
        'bizModule'    => 'BizModule',
        'filterShrink' => 'Filter',
        'name'         => 'Name',
        'orderBy'      => 'OrderBy',
        'orderType'    => 'OrderType',
        'os'           => 'Os',
        'pageIndex'    => 'PageIndex',
        'pageSize'     => 'PageSize',
        'status'       => 'Status',
        'timeRange'    => 'TimeRange',
    ];

    public function validate()
    {
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

        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
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
            $model->filterShrink = $map['Filter'];
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
