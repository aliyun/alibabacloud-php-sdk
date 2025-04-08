<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class StartJobRunResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobRunId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobRunId' => 'jobRunId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobRunId) {
            $res['jobRunId'] = $this->jobRunId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['jobRunId'])) {
            $model->jobRunId = $map['jobRunId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
