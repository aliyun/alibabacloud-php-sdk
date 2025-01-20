<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class CloneSentinelRuleFromAhasResponseBody extends Model
{
    /**
     * @var string[][]
     */
    public $data;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
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
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['Data'][$key1] = [];
                        $n2                 = 0;
                        foreach ($value1 as $item2) {
                            $res['Data'][$key1][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                foreach ($map['Data'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->data[$key1] = [];
                        $n2                 = 0;
                        foreach ($value1 as $item2) {
                            $model->data[$key1][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
