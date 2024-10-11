<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class SubmitSparkSQLResponseBody extends Model
{
    /**
     * @example j202104261729hangzhou224ee5230000930
     *
     * @var string
     */
    public $jobId;

    /**
     * @example B570310A-8A49-461B-B81D-AE0B58D63DA4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId'     => 'JobId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSparkSQLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
