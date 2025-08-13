<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariableConfigListResponseBody\resultObject;

class DescribeCustVariableConfigListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resultObject[]
     */
    public $resultObject;
    protected $_name = [
        'requestId' => 'RequestId',
        'resultObject' => 'resultObject',
    ];

    public function validate()
    {
        if (\is_array($this->resultObject)) {
            Model::validateArray($this->resultObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultObject) {
            if (\is_array($this->resultObject)) {
                $res['resultObject'] = [];
                $n1 = 0;
                foreach ($this->resultObject as $item1) {
                    $res['resultObject'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['resultObject'])) {
            if (!empty($map['resultObject'])) {
                $model->resultObject = [];
                $n1 = 0;
                foreach ($map['resultObject'] as $item1) {
                    $model->resultObject[$n1] = resultObject::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
