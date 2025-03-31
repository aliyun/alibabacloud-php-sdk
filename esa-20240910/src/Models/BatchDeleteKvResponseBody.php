<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteKvResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failKeys;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $successKeys;
    protected $_name = [
        'failKeys' => 'FailKeys',
        'requestId' => 'RequestId',
        'successKeys' => 'SuccessKeys',
    ];

    public function validate()
    {
        if (\is_array($this->failKeys)) {
            Model::validateArray($this->failKeys);
        }
        if (\is_array($this->successKeys)) {
            Model::validateArray($this->successKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failKeys) {
            if (\is_array($this->failKeys)) {
                $res['FailKeys'] = [];
                $n1 = 0;
                foreach ($this->failKeys as $item1) {
                    $res['FailKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successKeys) {
            if (\is_array($this->successKeys)) {
                $res['SuccessKeys'] = [];
                $n1 = 0;
                foreach ($this->successKeys as $item1) {
                    $res['SuccessKeys'][$n1++] = $item1;
                }
            }
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
        if (isset($map['FailKeys'])) {
            if (!empty($map['FailKeys'])) {
                $model->failKeys = [];
                $n1 = 0;
                foreach ($map['FailKeys'] as $item1) {
                    $model->failKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessKeys'])) {
            if (!empty($map['SuccessKeys'])) {
                $model->successKeys = [];
                $n1 = 0;
                foreach ($map['SuccessKeys'] as $item1) {
                    $model->successKeys[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
