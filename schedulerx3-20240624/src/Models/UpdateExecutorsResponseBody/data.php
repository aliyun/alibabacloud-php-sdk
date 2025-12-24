<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateExecutorsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appGroupId;

    /**
     * @var int
     */
    public $appType;

    /**
     * @var string
     */
    public $failedService;

    /**
     * @var int
     */
    public $workId;

    /**
     * @var string
     */
    public $workerType;

    /**
     * @var string
     */
    public $workers;
    protected $_name = [
        'appGroupId' => 'AppGroupId',
        'appType' => 'AppType',
        'failedService' => 'FailedService',
        'workId' => 'WorkId',
        'workerType' => 'WorkerType',
        'workers' => 'Workers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->failedService) {
            $res['FailedService'] = $this->failedService;
        }

        if (null !== $this->workId) {
            $res['WorkId'] = $this->workId;
        }

        if (null !== $this->workerType) {
            $res['WorkerType'] = $this->workerType;
        }

        if (null !== $this->workers) {
            $res['Workers'] = $this->workers;
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
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['FailedService'])) {
            $model->failedService = $map['FailedService'];
        }

        if (isset($map['WorkId'])) {
            $model->workId = $map['WorkId'];
        }

        if (isset($map['WorkerType'])) {
            $model->workerType = $map['WorkerType'];
        }

        if (isset($map['Workers'])) {
            $model->workers = $map['Workers'];
        }

        return $model;
    }
}
