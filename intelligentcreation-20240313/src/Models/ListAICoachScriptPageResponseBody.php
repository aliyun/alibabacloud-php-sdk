<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_;

class ListAICoachScriptPageResponseBody extends Model
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
     * @var string[]
     */
    public $extendCustomNameMap;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var string
     */
    public $requestId;

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
        'extendCustomNameMap' => 'extendCustomNameMap',
        'list' => 'list',
        'requestId' => 'requestId',
        'success' => 'success',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->extendCustomNameMap)) {
            Model::validateArray($this->extendCustomNameMap);
        }
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
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

        if (null !== $this->extendCustomNameMap) {
            if (\is_array($this->extendCustomNameMap)) {
                $res['extendCustomNameMap'] = [];
                foreach ($this->extendCustomNameMap as $key1 => $value1) {
                    $res['extendCustomNameMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['list'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['extendCustomNameMap'])) {
            if (!empty($map['extendCustomNameMap'])) {
                $model->extendCustomNameMap = [];
                foreach ($map['extendCustomNameMap'] as $key1 => $value1) {
                    $model->extendCustomNameMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['list'] as $item1) {
                    $model->list[$n1] = list_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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
