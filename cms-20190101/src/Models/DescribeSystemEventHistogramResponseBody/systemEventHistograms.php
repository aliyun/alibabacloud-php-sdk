<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponseBody\systemEventHistograms\systemEventHistogram;

class systemEventHistograms extends Model
{
    /**
     * @var systemEventHistogram[]
     */
    public $systemEventHistogram;
    protected $_name = [
        'systemEventHistogram' => 'SystemEventHistogram',
    ];

    public function validate()
    {
        if (\is_array($this->systemEventHistogram)) {
            Model::validateArray($this->systemEventHistogram);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemEventHistogram) {
            if (\is_array($this->systemEventHistogram)) {
                $res['SystemEventHistogram'] = [];
                $n1 = 0;
                foreach ($this->systemEventHistogram as $item1) {
                    $res['SystemEventHistogram'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SystemEventHistogram'])) {
            if (!empty($map['SystemEventHistogram'])) {
                $model->systemEventHistogram = [];
                $n1 = 0;
                foreach ($map['SystemEventHistogram'] as $item1) {
                    $model->systemEventHistogram[$n1] = systemEventHistogram::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
