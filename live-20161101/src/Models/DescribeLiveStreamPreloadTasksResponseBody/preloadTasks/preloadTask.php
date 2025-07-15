<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPreloadTasksResponseBody\preloadTasks;

use AlibabaCloud\Tea\Model;

class preloadTask extends Model
{
    /**
     * @description The acceleration region where the live content is prefetched. Valid values:
     *
     *   domestic: regions in the Chinese mainland.
     *   overseas: regions outside the Chinese mainland.
     *   global: regions in and outside the Chinese mainland.
     *
     * >  If this parameter is left empty, the acceleration region configured for the domain name is returned.
     *
     * @example domestic
     *
     * @var string
     */
    public $area;

    /**
     * @description The time when the prefetch task was created.
     *
     * @example 2016-06-29T19:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the prefetch task is successful. Valid values:
     *
     *   Successfully
     *   InternalError
     *
     * @example Successfully
     *
     * @var string
     */
    public $description;

    /**
     * @description The streaming domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The streaming URL.
     *
     * @var string
     */
    public $playUrl;

    /**
     * @description The time when the prefetch task ended.
     *
     * @example 2016-06-30T19:00:00Z
     *
     * @var string
     */
    public $preloadedEndTime;

    /**
     * @description The time when the prefetch task started.
     *
     * @example 2016-06-29T19:00:00Z
     *
     * @var string
     */
    public $preloadedStartTime;

    /**
     * @description The progress of the prefetch task.
     *
     * @example 100%
     *
     * @var string
     */
    public $process;

    /**
     * @description The status of the prefetch task. Valid values:
     *
     *   Success
     *   Failed
     *
     * >  Success is returned only if the prefetch task is configured for all streaming URLs.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the prefetch task.
     *
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'area' => 'Area',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'domainName' => 'DomainName',
        'playUrl' => 'PlayUrl',
        'preloadedEndTime' => 'PreloadedEndTime',
        'preloadedStartTime' => 'PreloadedStartTime',
        'process' => 'Process',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->playUrl) {
            $res['PlayUrl'] = $this->playUrl;
        }
        if (null !== $this->preloadedEndTime) {
            $res['PreloadedEndTime'] = $this->preloadedEndTime;
        }
        if (null !== $this->preloadedStartTime) {
            $res['PreloadedStartTime'] = $this->preloadedStartTime;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preloadTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PlayUrl'])) {
            $model->playUrl = $map['PlayUrl'];
        }
        if (isset($map['PreloadedEndTime'])) {
            $model->preloadedEndTime = $map['PreloadedEndTime'];
        }
        if (isset($map['PreloadedStartTime'])) {
            $model->preloadedStartTime = $map['PreloadedStartTime'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
