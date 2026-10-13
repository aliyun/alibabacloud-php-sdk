<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\RetryFailedContextDatabaseSyncRunResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $retryOfRunId;

    /**
     * @var string
     */
    public $runId;
    protected $_name = [
        'retryOfRunId' => 'RetryOfRunId',
        'runId' => 'RunId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->retryOfRunId) {
            $res['RetryOfRunId'] = $this->retryOfRunId;
        }

        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
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
        if (isset($map['RetryOfRunId'])) {
            $model->retryOfRunId = $map['RetryOfRunId'];
        }

        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        return $model;
    }
}
