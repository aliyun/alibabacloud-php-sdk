<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponseBody\data\result\list_;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponseBody\data\result\max;

class result extends Model
{
    /**
     * @var string
     */
    public $detectionResult;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var max
     */
    public $max;
    protected $_name = [
        'detectionResult' => 'DetectionResult',
        'list' => 'List',
        'max' => 'Max',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        if (null !== $this->max) {
            $this->max->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectionResult) {
            $res['DetectionResult'] = $this->detectionResult;
        }

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->max) {
            $res['Max'] = null !== $this->max ? $this->max->toArray($noStream) : $this->max;
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
        if (isset($map['DetectionResult'])) {
            $model->detectionResult = $map['DetectionResult'];
        }

        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1++] = list_::fromMap($item1);
                }
            }
        }

        if (isset($map['Max'])) {
            $model->max = max::fromMap($map['Max']);
        }

        return $model;
    }
}
