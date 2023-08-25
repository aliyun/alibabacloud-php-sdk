<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetSparkAppAttemptLogRequest extends Model
{
    /**
     * @description The ID of the log.
     *
     * > You can call the [ListSparkAppAttempts](~~455887~~) operation to query the information about the retry attempts of a Spark application, including the retry log IDs.
     * @example s202207151211hz****-0001
     *
     * @var string
     */
    public $attemptId;

    /**
     * @description The number of log entries to return. Valid values: 1 to 500. Default value: 300.
     *
     * @example 20
     *
     * @var int
     */
    public $logLength;
    protected $_name = [
        'attemptId' => 'AttemptId',
        'logLength' => 'LogLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attemptId) {
            $res['AttemptId'] = $this->attemptId;
        }
        if (null !== $this->logLength) {
            $res['LogLength'] = $this->logLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSparkAppAttemptLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttemptId'])) {
            $model->attemptId = $map['AttemptId'];
        }
        if (isset($map['LogLength'])) {
            $model->logLength = $map['LogLength'];
        }

        return $model;
    }
}
