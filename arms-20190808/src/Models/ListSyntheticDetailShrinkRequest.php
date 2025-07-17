<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListSyntheticDetailShrinkRequest extends Model
{
    /**
     * @description An array of filter conditions. This parameter is required.
     *
     *   To query the list of synthetic test results, set this parameter in the following format: [{"Key":"taskType","OpType":"in","Value":[Task type]}].
     *   To query the result details of a synthetic monitoring task, set this parameter in the following format: [{"Key":"dataId","OpType":"eq","Value":"dataId"}]. dataId is returned when you query the list of synthetic test results.
     *
     * @var string
     */
    public $advancedFiltersShrink;

    /**
     * @description The type of the results. Set the value to SYNTHETIC.
     *
     * @example SYNTHETIC
     *
     * @var string
     */
    public $category;

    /**
     * @description The type of the list that contains the results. This parameter is required. Valid values:
     *
     *   ICMP_LIST
     *   TCP_LIST
     *   DNS_LIST
     *   HTTP_LIST
     *   WEBSITE_LIST
     *   DOWNLOAD_LIST
     *   ALL
     *
     * @example ICMP_LIST
     *
     * @var string
     */
    public $detail;

    /**
     * @description The timestamp of the end time of the query. Unit: milliseconds.
     *
     * @example 1684480557772
     *
     * @var int
     */
    public $endTime;

    /**
     * @description A reserved field.
     *
     * @var string
     */
    public $exactFiltersShrink;

    /**
     * @description The filter condition. This parameter is required.
     *
     *   To query the result of a synthetic monitoring task, set this parameter in the following format: {"taskId":"${taskId}"}.
     *   To query the result details of a synthetic monitoring task, set this parameter in the following format: {"taskId":"${taskId}","dataId":"${dataId}"}.
     *
     * @var string
     */
    public $filtersShrink;

    /**
     * @description The order in which results are sorted. Valid values:
     *
     * - `ASC`: ascending order
     * - `DESC`: descending order
     *
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @description The field based on which results are sorted. Set the value to timestamp.
     *
     * @example timestamp
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region. Set the value to cn-hangzhou.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timestamp of the start time of the query. Unit: milliseconds.
     *
     * @example 1684110343127
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The type of the synthetic test. Valid values: 1 and 2. 1 represents an immediate test, and 2 represents a scheduled test.
     *
     * @example 1
     *
     * @var int
     */
    public $syntheticType;
    protected $_name = [
        'advancedFiltersShrink' => 'AdvancedFilters',
        'category' => 'Category',
        'detail' => 'Detail',
        'endTime' => 'EndTime',
        'exactFiltersShrink' => 'ExactFilters',
        'filtersShrink' => 'Filters',
        'order' => 'Order',
        'orderBy' => 'OrderBy',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'syntheticType' => 'SyntheticType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedFiltersShrink) {
            $res['AdvancedFilters'] = $this->advancedFiltersShrink;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->exactFiltersShrink) {
            $res['ExactFilters'] = $this->exactFiltersShrink;
        }
        if (null !== $this->filtersShrink) {
            $res['Filters'] = $this->filtersShrink;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->syntheticType) {
            $res['SyntheticType'] = $this->syntheticType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSyntheticDetailShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedFilters'])) {
            $model->advancedFiltersShrink = $map['AdvancedFilters'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExactFilters'])) {
            $model->exactFiltersShrink = $map['ExactFilters'];
        }
        if (isset($map['Filters'])) {
            $model->filtersShrink = $map['Filters'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SyntheticType'])) {
            $model->syntheticType = $map['SyntheticType'];
        }

        return $model;
    }
}
