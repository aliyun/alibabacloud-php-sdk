<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class CancelJobRunResponseBody extends Model
{
    /**
     * @example jr-1a2bc3
     *
     * @var string
     */
    public $jobRunId;

    /**
     * @description 请求ID。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobRunId'  => 'jobRunId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CancelJobRunResponseBody
     */
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
