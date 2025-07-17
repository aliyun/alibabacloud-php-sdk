<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TestDataSourceConnectivityResponseBody\connectivity;

use AlibabaCloud\Tea\Model;

class detailLogs extends Model
{
    /**
     * @description The code of the test item.
     *
     * @example validate_input_parameters
     *
     * @var string
     */
    public $code;

    /**
     * @description The end time of a step.
     *
     * @example 1730217604002
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the step.
     *
     * @var string
     */
    public $message;

    /**
     * @description The start time of a step.
     *
     * @example 1730217600001
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'code' => 'Code',
        'endTime' => 'EndTime',
        'message' => 'Message',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
