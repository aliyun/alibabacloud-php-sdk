<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ScaleQuotaRequest extends Model
{
    /**
     * @var ResourceSpec
     */
    public $min;
    /**
     * @var string[]
     */
    public $resourceGroupIds;
    protected $_name = [
        'min'              => 'Min',
        'resourceGroupIds' => 'ResourceGroupIds',
    ];

    public function validate()
    {
        if (null !== $this->min) {
            $this->min->validate();
        }
        if (\is_array($this->resourceGroupIds)) {
            Model::validateArray($this->resourceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->min) {
            $res['Min'] = null !== $this->min ? $this->min->toArray($noStream) : $this->min;
        }

        if (null !== $this->resourceGroupIds) {
            if (\is_array($this->resourceGroupIds)) {
                $res['ResourceGroupIds'] = [];
                $n1                      = 0;
                foreach ($this->resourceGroupIds as $item1) {
                    $res['ResourceGroupIds'][$n1++] = $item1;
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
        if (isset($map['Min'])) {
            $model->min = ResourceSpec::fromMap($map['Min']);
        }

        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = [];
                $n1                      = 0;
                foreach ($map['ResourceGroupIds'] as $item1) {
                    $model->resourceGroupIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
