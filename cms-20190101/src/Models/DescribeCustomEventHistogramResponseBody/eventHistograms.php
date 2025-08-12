<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramResponseBody\eventHistograms\eventHistogram;

class eventHistograms extends Model
{
    /**
     * @var eventHistogram[]
     */
    public $eventHistogram;
    protected $_name = [
        'eventHistogram' => 'EventHistogram',
    ];

    public function validate()
    {
        if (\is_array($this->eventHistogram)) {
            Model::validateArray($this->eventHistogram);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventHistogram) {
            if (\is_array($this->eventHistogram)) {
                $res['EventHistogram'] = [];
                $n1 = 0;
                foreach ($this->eventHistogram as $item1) {
                    $res['EventHistogram'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventHistogram'])) {
            if (!empty($map['EventHistogram'])) {
                $model->eventHistogram = [];
                $n1 = 0;
                foreach ($map['EventHistogram'] as $item1) {
                    $model->eventHistogram[$n1] = eventHistogram::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
