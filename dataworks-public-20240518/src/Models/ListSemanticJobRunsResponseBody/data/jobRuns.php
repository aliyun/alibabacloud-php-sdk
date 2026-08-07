<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListSemanticJobRunsResponseBody\data;

use AlibabaCloud\Dara\Model;

class jobRuns extends Model
{
    /**
     * @var string
     */
    public $executorJobId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobRunId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'executorJobId' => 'ExecutorJobId',
        'gmtCreate' => 'GmtCreate',
        'jobName' => 'JobName',
        'jobRunId' => 'JobRunId',
        'userId' => 'UserId',
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

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobRunId) {
            $res['JobRunId'] = $this->jobRunId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobRunId'])) {
            $model->jobRunId = $map['JobRunId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
