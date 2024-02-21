<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
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
    public $complete;

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
     * @description The ID of the asynchronous request.
     *
     * @example async__507044db6c4eadfa2dab9b084e80****
     *
     * @var string
     */
    public $resultId;

    /**
     * @description The session data.
     *
     * @var sessionData
     */
    public $sessionData;

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
     * @description The time when the asynchronous request was made. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1660100753556
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'complete'    => 'Complete',
        'fail'        => 'Fail',
        'isFinish'    => 'IsFinish',
        'resultId'    => 'ResultId',
        'sessionData' => 'SessionData',
        'state'       => 'State',
        'timestamp'   => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complete) {
            $res['Complete'] = $this->complete;
        }
        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }
        if (null !== $this->isFinish) {
            $res['IsFinish'] = $this->isFinish;
        }
        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }
        if (null !== $this->sessionData) {
            $res['SessionData'] = null !== $this->sessionData ? $this->sessionData->toMap() : null;
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
        if (isset($map['Complete'])) {
            $model->complete = $map['Complete'];
        }
        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }
        if (isset($map['IsFinish'])) {
            $model->isFinish = $map['IsFinish'];
        }
        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }
        if (isset($map['SessionData'])) {
            $model->sessionData = sessionData::fromMap($map['SessionData']);
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
