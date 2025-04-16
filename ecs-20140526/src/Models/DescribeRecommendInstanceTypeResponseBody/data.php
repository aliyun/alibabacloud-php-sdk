<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType;

class data extends Model
{
    /**
     * @var recommendInstanceType[]
     */
    public $recommendInstanceType;
    protected $_name = [
        'recommendInstanceType' => 'RecommendInstanceType',
    ];

    public function validate()
    {
        if (\is_array($this->recommendInstanceType)) {
            Model::validateArray($this->recommendInstanceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recommendInstanceType) {
            if (\is_array($this->recommendInstanceType)) {
                $res['RecommendInstanceType'] = [];
                $n1 = 0;
                foreach ($this->recommendInstanceType as $item1) {
                    $res['RecommendInstanceType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecommendInstanceType'])) {
            if (!empty($map['RecommendInstanceType'])) {
                $model->recommendInstanceType = [];
                $n1 = 0;
                foreach ($map['RecommendInstanceType'] as $item1) {
                    $model->recommendInstanceType[$n1++] = recommendInstanceType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
