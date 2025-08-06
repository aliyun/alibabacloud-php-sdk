<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetOSSStatisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetOSSStatisResponseBody\ossStatisList\OSSMetric;

class ossStatisList extends Model
{
    /**
     * @var OSSMetric[]
     */
    public $OSSMetric;
    protected $_name = [
        'OSSMetric' => 'OSSMetric',
    ];

    public function validate()
    {
        if (\is_array($this->OSSMetric)) {
            Model::validateArray($this->OSSMetric);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OSSMetric) {
            if (\is_array($this->OSSMetric)) {
                $res['OSSMetric'] = [];
                $n1 = 0;
                foreach ($this->OSSMetric as $item1) {
                    $res['OSSMetric'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OSSMetric'])) {
            if (!empty($map['OSSMetric'])) {
                $model->OSSMetric = [];
                $n1 = 0;
                foreach ($map['OSSMetric'] as $item1) {
                    $model->OSSMetric[$n1] = OSSMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
