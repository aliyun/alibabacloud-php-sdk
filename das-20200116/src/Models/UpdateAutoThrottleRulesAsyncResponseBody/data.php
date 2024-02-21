<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoThrottleRulesAsyncResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoThrottleRulesAsyncResponseBody\data\configResponse;
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
     * @description The returned data of the configuration.
     *
     * >  The data is returned only if the value of isFinish is **true**. This value indicates that the asynchronous request is complete.
     * @var configResponse
     */
    public $configResponse;

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
     * @example async__665ee69612f1627c7fd9f3c85075****
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
     * @description The time when the asynchronous request was made. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1645668213000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'complete'       => 'Complete',
        'configResponse' => 'ConfigResponse',
        'fail'           => 'Fail',
        'isFinish'       => 'IsFinish',
        'resultId'       => 'ResultId',
        'state'          => 'State',
        'timestamp'      => 'Timestamp',
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
        if (null !== $this->configResponse) {
            $res['ConfigResponse'] = null !== $this->configResponse ? $this->configResponse->toMap() : null;
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
        if (isset($map['ConfigResponse'])) {
            $model->configResponse = configResponse::fromMap($map['ConfigResponse']);
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
