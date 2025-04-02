<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class InvokeSkillResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $data;
    protected $_name = [
        'requestId' => 'RequestId',
        'data' => 'data',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['data'][$key1] = $value1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                foreach ($map['data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
