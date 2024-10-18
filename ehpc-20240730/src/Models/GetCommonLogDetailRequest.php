<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class GetCommonLogDetailRequest extends Model
{
    /**
     * @description The start time of the time range within which the logs that you want to query were generated. The time is a timestamp. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1703821542
     *
     * @var int
     */
    public $from;

    /**
     * @description Specifies whether to hide the process of each step. Valid values:
     *
     *   true: hides the process and returns only the result log of each step.
     *   false: does not hide the process and displays the start and result logs of each step.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $hiddenProcess;

    /**
     * @description The request ID.
     *
     * This parameter is required.
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @description The end time of the time range within which the logs that you want to query were generated. The time is a timestamp. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1703821666
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'from'          => 'From',
        'hiddenProcess' => 'HiddenProcess',
        'logRequestId'  => 'LogRequestId',
        'to'            => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->hiddenProcess) {
            $res['HiddenProcess'] = $this->hiddenProcess;
        }
        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCommonLogDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['HiddenProcess'])) {
            $model->hiddenProcess = $map['HiddenProcess'];
        }
        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
