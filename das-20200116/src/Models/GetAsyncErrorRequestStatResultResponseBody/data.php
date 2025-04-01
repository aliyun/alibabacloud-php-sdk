<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestStatResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DataResultValue;

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
     * @var DataResultValue[]
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
        'complete' => 'complete',
        'fail' => 'fail',
        'isFinish' => 'isFinish',
        'result' => 'result',
        'resultId' => 'resultId',
        'state' => 'state',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->result)) {
                $res['result'] = [];
                foreach ($this->result as $key1 => $value1) {
                    $res['result'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                foreach ($map['result'] as $key1 => $value1) {
                    $model->result[$key1] = DataResultValue::fromMap($value1);
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
