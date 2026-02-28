<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class BatchUnbindProjectProductsRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string[]
     */
    public $productKeys;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKeys' => 'ProductKeys',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->productKeys)) {
            Model::validateArray($this->productKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->productKeys) {
            if (\is_array($this->productKeys)) {
                $res['ProductKeys'] = [];
                $n1 = 0;
                foreach ($this->productKeys as $item1) {
                    $res['ProductKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ProductKeys'])) {
            if (!empty($map['ProductKeys'])) {
                $model->productKeys = [];
                $n1 = 0;
                foreach ($map['ProductKeys'] as $item1) {
                    $model->productKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
