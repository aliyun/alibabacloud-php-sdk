<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class DownloadSemanticResultsRequest extends Model
{
    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobRunId;
    protected $_name = [
        'jobName' => 'JobName',
        'jobRunId' => 'JobRunId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobRunId) {
            $res['JobRunId'] = $this->jobRunId;
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
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobRunId'])) {
            $model->jobRunId = $map['JobRunId'];
        }

        return $model;
    }
}
