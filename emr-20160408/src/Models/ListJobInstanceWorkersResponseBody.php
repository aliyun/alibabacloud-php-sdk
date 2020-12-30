<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobInstanceWorkersResponseBody\jobInstanceWorkers;
use AlibabaCloud\Tea\Model;

class ListJobInstanceWorkersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jobInstanceWorkers
     */
    public $jobInstanceWorkers;
    protected $_name = [
        'requestId'          => 'RequestId',
        'jobInstanceWorkers' => 'JobInstanceWorkers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->jobInstanceWorkers) {
            $res['JobInstanceWorkers'] = null !== $this->jobInstanceWorkers ? $this->jobInstanceWorkers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobInstanceWorkersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['JobInstanceWorkers'])) {
            $model->jobInstanceWorkers = jobInstanceWorkers::fromMap($map['JobInstanceWorkers']);
        }

        return $model;
    }
}
