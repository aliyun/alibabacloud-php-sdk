<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones\zone;

use AlibabaCloud\Dara\Model;

class networkTypes extends Model
{
    /**
     * @var string[]
     */
    public $networkType;
    protected $_name = [
        'networkType' => 'NetworkType',
    ];

    public function validate()
    {
        if (\is_array($this->networkType)) {
            Model::validateArray($this->networkType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkType) {
            if (\is_array($this->networkType)) {
                $res['NetworkType'] = [];
                $n1                 = 0;
                foreach ($this->networkType as $item1) {
                    $res['NetworkType'][$n1++] = $item1;
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
        if (isset($map['NetworkType'])) {
            if (!empty($map['NetworkType'])) {
                $model->networkType = [];
                $n1                 = 0;
                foreach ($map['NetworkType'] as $item1) {
                    $model->networkType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
