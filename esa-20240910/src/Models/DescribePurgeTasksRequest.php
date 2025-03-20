<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribePurgeTasksRequest extends Model
{
    /**
     * @description The content to purge. Exact match is supported.
     *
     * @example http://a.com/1.jpg?b=1
     *
     * @var string
     */
    public $content;

    /**
     * @description The end time. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The end time must be later than the start time.
     *
     * @example 2022-11-18T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number. Valid values: 1 to 100000.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 20. Valid values: 1 to 50.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The website ID. You can call the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation to obtain the ID.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The start time. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-11-16T05:33:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The task status. Valid values:
     *
     *   **Complete**: The task is complete.
     *   **Refreshing**: The task is in progress.
     *   **Failed**: The task failed.
     *
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @description The task type. Valid values:
     *
     *   **file** (default): purges the cache by file.
     *   **cachetag**: purges the cache by cache tag.
     *   **directory**: purges the cache by directory.
     *   **ignoreParams**: purges the cache by URL with specified parameters ignored.
     *   **hostname**: purges the cache by hostname.
     *   **purgeall**: purges all cache.
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'Content',
        'endTime' => 'EndTime',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'siteId' => 'SiteId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePurgeTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
