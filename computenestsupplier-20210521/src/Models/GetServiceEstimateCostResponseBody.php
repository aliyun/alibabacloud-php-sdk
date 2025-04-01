<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class GetServiceEstimateCostResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $commodity;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $resources;
    protected $_name = [
        'commodity' => 'Commodity',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        if (\is_array($this->commodity)) {
            Model::validateArray($this->commodity);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodity) {
            if (\is_array($this->commodity)) {
                $res['Commodity'] = [];
                foreach ($this->commodity as $key1 => $value1) {
                    $res['Commodity'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                foreach ($this->resources as $key1 => $value1) {
                    $res['Resources'][$key1] = $value1;
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
        if (isset($map['Commodity'])) {
            if (!empty($map['Commodity'])) {
                $model->commodity = [];
                foreach ($map['Commodity'] as $key1 => $value1) {
                    $model->commodity[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                foreach ($map['Resources'] as $key1 => $value1) {
                    $model->resources[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
