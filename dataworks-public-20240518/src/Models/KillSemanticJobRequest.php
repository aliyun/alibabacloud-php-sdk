<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class KillSemanticJobRequest extends Model
{
    /**
     * @var string
     */
    public $executorJobId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $retryTimes;
    protected $_name = [
        'executorJobId' => 'ExecutorJobId',
        'projectId' => 'ProjectId',
        'retryTimes' => 'RetryTimes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorJobId) {
            $res['ExecutorJobId'] = $this->executorJobId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
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
        if (isset($map['ExecutorJobId'])) {
            $model->executorJobId = $map['ExecutorJobId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }

        return $model;
    }
}
