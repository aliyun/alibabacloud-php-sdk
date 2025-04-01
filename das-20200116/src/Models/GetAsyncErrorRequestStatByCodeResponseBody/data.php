<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestStatByCodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestStatByCodeResponseBody\data\result;

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
     * @var result[]
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
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
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
