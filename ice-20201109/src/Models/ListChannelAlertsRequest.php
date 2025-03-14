<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListChannelAlertsRequest extends Model
{
    /**
     * @description The alert type.
     *
     * @var string
     */
    public $category;

    /**
     * @description The end of the time range to query.
     *
     * @example 2024-11-21T16:10:45Z
     *
     * @var string
     */
    public $gmtEnd;

    /**
     * @description The beginning of the time range to query.
     *
     * @example 2024-11-21T16:10:45Z
     *
     * @var string
     */
    public $gmtStart;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ARN of the channel.
     *
     * This parameter is required.
     *
     * @example acs:ims:mediaweaver:<regionId>:<userId>:channel/myChannel
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @description The sorting order by modification time. Valid values: asc and desc.
     *
     * @example desc
     *
     * @var string
     */
    public $sortByModifiedTime;
    protected $_name = [
        'category' => 'Category',
        'gmtEnd' => 'GmtEnd',
        'gmtStart' => 'GmtStart',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'resourceArn' => 'ResourceArn',
        'sortByModifiedTime' => 'SortByModifiedTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->gmtEnd) {
            $res['GmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtStart) {
            $res['GmtStart'] = $this->gmtStart;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->sortByModifiedTime) {
            $res['SortByModifiedTime'] = $this->sortByModifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChannelAlertsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['GmtEnd'])) {
            $model->gmtEnd = $map['GmtEnd'];
        }
        if (isset($map['GmtStart'])) {
            $model->gmtStart = $map['GmtStart'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['SortByModifiedTime'])) {
            $model->sortByModifiedTime = $map['SortByModifiedTime'];
        }

        return $model;
    }
}
