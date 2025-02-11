<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoResourceOptimizeRulesAsyncResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoResourceOptimizeRulesAsyncResponseBody\data\configResponse;

class data extends Model
{
    /**
     * @var bool
     */
    public $complete;
    /**
     * @var configResponse
     */
    public $configResponse;
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
     * @var string
     */
    public $state;
    /**
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
        if (null !== $this->configResponse) {
            $this->configResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complete) {
            $res['Complete'] = $this->complete;
        }

        if (null !== $this->configResponse) {
            $res['ConfigResponse'] = null !== $this->configResponse ? $this->configResponse->toArray($noStream) : $this->configResponse;
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
