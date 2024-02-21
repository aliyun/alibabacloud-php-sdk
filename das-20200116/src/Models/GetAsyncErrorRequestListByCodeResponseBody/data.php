<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestListByCodeResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestListByCodeResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the asynchronous request was complete.
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
     * @description The instance ID.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description The ID of the asynchronous request.
     *
     * @example async__c39d43ece52d35267cc4b92a0c26****
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
     * @example 1644559407740
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'complete'  => 'complete',
        'fail'      => 'fail',
        'isFinish'  => 'isFinish',
        'result'    => 'result',
        'resultId'  => 'resultId',
        'state'     => 'state',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complete) {
            $res['complete'] = $this->complete;
        }
        if (null !== $this->fail) {
            $res['fail'] = $this->fail;
        }
        if (null !== $this->isFinish) {
            $res['isFinish'] = $this->isFinish;
        }
        if (null !== $this->result) {
            $res['result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resultId) {
            $res['resultId'] = $this->resultId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['complete'])) {
            $model->complete = $map['complete'];
        }
        if (isset($map['fail'])) {
            $model->fail = $map['fail'];
        }
        if (isset($map['isFinish'])) {
            $model->isFinish = $map['isFinish'];
        }
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['resultId'])) {
            $model->resultId = $map['resultId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
