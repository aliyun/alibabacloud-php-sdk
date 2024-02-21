<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestStatResultByInstanceIdResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestStatResultByInstanceIdResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the asynchronous request failed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $fail;

    /**
     * @description Indicates whether the asynchronous request was complete. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isFinish;

    /**
     * @description The returned full request data.
     *
     * @var result
     */
    public $result;

    /**
     * @description The request ID.
     *
     * @example 9CB97BC4-6479-55D0-B9D0-EA925AFE****
     *
     * @var string
     */
    public $resultId;

    /**
     * @description The state of the asynchronous request. Valid values:
     *
     *   **RUNNING**
     *   **SUCCESS**
     *   **FAIL**
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $state;

    /**
     * @description The time when the asynchronous request was sent. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1645668213000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'fail'      => 'Fail',
        'isFinish'  => 'IsFinish',
        'result'    => 'Result',
        'resultId'  => 'ResultId',
        'state'     => 'State',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }
        if (null !== $this->isFinish) {
            $res['IsFinish'] = $this->isFinish;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }
        if (isset($map['IsFinish'])) {
            $model->isFinish = $map['IsFinish'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
