<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class QueryPublicModelEngineResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $returnValue;
    protected $_name = [
        'requestId' => 'RequestId',
        'returnValue' => 'ReturnValue',
    ];

    public function validate()
    {
        if (\is_array($this->returnValue)) {
            Model::validateArray($this->returnValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->returnValue) {
            if (\is_array($this->returnValue)) {
                $res['ReturnValue'] = [];
                $n1 = 0;
                foreach ($this->returnValue as $item1) {
                    if (\is_array($item1)) {
                        $res['ReturnValue'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['ReturnValue'][$n1++][$key2] = $value2;
                        }
                    }
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

        if (isset($map['ReturnValue'])) {
            if (!empty($map['ReturnValue'])) {
                $model->returnValue = [];
                $n1 = 0;
                foreach ($map['ReturnValue'] as $item1) {
                    if (!empty($item1)) {
                        $model->returnValue[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->returnValue[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
