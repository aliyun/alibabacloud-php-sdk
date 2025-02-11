<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestStatResultByInstanceIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestStatResultByInstanceIdResponseBody\data\result;

class data extends Model
{
    /**
     * @var bool
     */
    public $fail;
    /**
     * @var bool
     */
    public $isFinish;
    /**
     * @var result
     */
    public $result;
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
        'fail'      => 'Fail',
        'isFinish'  => 'IsFinish',
        'result'    => 'Result',
        'resultId'  => 'ResultId',
        'state'     => 'State',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }

        if (null !== $this->isFinish) {
            $res['IsFinish'] = $this->isFinish;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
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
