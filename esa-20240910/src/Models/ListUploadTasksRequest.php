<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListUploadTasksRequest extends Model
{
    /**
     * @description The time when the task ends. Specify the time in the YYYY-MM-DDThh:mm:ssZ format.
     *
     * @example 2019-12-06T12:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The time when the task starts. Specify the time in the YYYY-MM-DDThh:mm:ssZ format.
     *
     * @example 2018-11-29T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The task type. Valid values:
     *
     *   **file**: purges the cache by file URL.
     *   **preload**: prefetches files.
     *   **directory**: purges the cache by directory.
     *   **ignoreparams**: purges the cache by URL with specified parameters ignored.
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime' => 'EndTime',
        'siteId' => 'SiteId',
        'startTime' => 'StartTime',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUploadTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
