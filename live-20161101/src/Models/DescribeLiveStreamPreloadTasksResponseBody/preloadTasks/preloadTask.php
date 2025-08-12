<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPreloadTasksResponseBody\preloadTasks;

use AlibabaCloud\Dara\Model;

class preloadTask extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $playUrl;

    /**
     * @var string
     */
    public $preloadedEndTime;

    /**
     * @var string
     */
    public $preloadedStartTime;

    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $status;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
