<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeApisecSlsLogStoresResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $logStores;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logStores' => 'LogStores',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->logStores)) {
            Model::validateArray($this->logStores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStores) {
            if (\is_array($this->logStores)) {
                $res['LogStores'] = [];
                $n1 = 0;
                foreach ($this->logStores as $item1) {
                    $res['LogStores'][$n1++] = $item1;
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
        if (isset($map['LogStores'])) {
            if (!empty($map['LogStores'])) {
                $model->logStores = [];
                $n1 = 0;
                foreach ($map['LogStores'] as $item1) {
                    $model->logStores[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
