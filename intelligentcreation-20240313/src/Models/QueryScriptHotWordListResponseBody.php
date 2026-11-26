<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class QueryScriptHotWordListResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var AICoachScriptHotWordItem[]
     */
    public $scriptHotWordList;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'requestId' => 'requestId',
        'scriptHotWordList' => 'scriptHotWordList',
        'success' => 'success',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->scriptHotWordList)) {
            Model::validateArray($this->scriptHotWordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scriptHotWordList) {
            if (\is_array($this->scriptHotWordList)) {
                $res['scriptHotWordList'] = [];
                $n1 = 0;
                foreach ($this->scriptHotWordList as $item1) {
                    $res['scriptHotWordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scriptHotWordList'])) {
            if (!empty($map['scriptHotWordList'])) {
                $model->scriptHotWordList = [];
                $n1 = 0;
                foreach ($map['scriptHotWordList'] as $item1) {
                    $model->scriptHotWordList[$n1] = AICoachScriptHotWordItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
