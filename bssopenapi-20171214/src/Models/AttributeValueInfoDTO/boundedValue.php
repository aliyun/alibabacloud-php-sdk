<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AttributeValueInfoDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AttributeValueInfoDTO;

class boundedValue extends Model
{
    /**
     * @var AttributeValueInfoDTO[]
     */
    public $lowerBound;

    /**
     * @var AttributeValueInfoDTO[]
     */
    public $upperBound;
    protected $_name = [
        'lowerBound' => 'LowerBound',
        'upperBound' => 'UpperBound',
    ];

    public function validate()
    {
        if (\is_array($this->lowerBound)) {
            Model::validateArray($this->lowerBound);
        }
        if (\is_array($this->upperBound)) {
            Model::validateArray($this->upperBound);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lowerBound) {
            if (\is_array($this->lowerBound)) {
                $res['LowerBound'] = [];
                $n1 = 0;
                foreach ($this->lowerBound as $item1) {
                    $res['LowerBound'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upperBound) {
            if (\is_array($this->upperBound)) {
                $res['UpperBound'] = [];
                $n1 = 0;
                foreach ($this->upperBound as $item1) {
                    $res['UpperBound'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LowerBound'])) {
            if (!empty($map['LowerBound'])) {
                $model->lowerBound = [];
                $n1 = 0;
                foreach ($map['LowerBound'] as $item1) {
                    $model->lowerBound[$n1] = AttributeValueInfoDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpperBound'])) {
            if (!empty($map['UpperBound'])) {
                $model->upperBound = [];
                $n1 = 0;
                foreach ($map['UpperBound'] as $item1) {
                    $model->upperBound[$n1] = AttributeValueInfoDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
