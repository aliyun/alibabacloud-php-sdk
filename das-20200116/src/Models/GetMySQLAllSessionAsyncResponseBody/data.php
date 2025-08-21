<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData;

class data extends Model
{
    /**
     * @var bool
     */
    public $complete;

    /**
     * @var bool
     */
    public $fail;

    /**
     * @var bool
     */
    public $isFinish;

    /**
     * @var string
     */
    public $resultId;

    /**
     * @var sessionData
     */
    public $sessionData;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'complete' => 'Complete',
        'fail' => 'Fail',
        'isFinish' => 'IsFinish',
        'resultId' => 'ResultId',
        'sessionData' => 'SessionData',
        'state' => 'State',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->sessionData) {
            $this->sessionData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SessionData'] = null !== $this->sessionData ? $this->sessionData->toArray($noStream) : $this->sessionData;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
