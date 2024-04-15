<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description The log severity.
     *
     * Valid values:
     *
     *   ERROR
     *
     * <!-- -->
     *
     *   INFO
     *
     * <!-- -->
     *
     *   WARN
     *
     * <!-- -->
     * @example INFO
     *
     * @var string
     */
    public $level;

    /**
     * @description Details of the log entry.
     *
     * @example code:success | message:Create Connector complete
     *
     * @var string
     */
    public $message;

    /**
     * @description The step in the log entry.
     *
     * @example CREATE_CONNECTOR
     *
     * @var string
     */
    public $step;

    /**
     * @description The time when the log entry was printed.
     *
     * @example 2021-05-12T09:42Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'level'     => 'Level',
        'message'   => 'Message',
        'step'      => 'Step',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
