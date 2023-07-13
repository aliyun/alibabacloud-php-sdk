<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorListRequest extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example site
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of hops for the PING protocol.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeSiteMonitorList**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The parsing path of the assertion.
     *
     *   If the assertion type is `body_json`, the path is `json path`.
     *   If the assertion type is `body_xml`, the path is `xml path`.
     *
     * @example a1ecd34a-8157-44d9-b060-14950837****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The ID of the site monitoring task.
     *
     * @example 1
     *
     * @var string
     */
    public $taskState;

    /**
     * @description The time when the site monitoring task was updated.
     *
     * @example HTTP
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'keyword'   => 'Keyword',
        'page'      => 'Page',
        'pageSize'  => 'PageSize',
        'regionId'  => 'RegionId',
        'taskId'    => 'TaskId',
        'taskState' => 'TaskState',
        'taskType'  => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
