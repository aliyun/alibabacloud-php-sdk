<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody\timeSlicesInfo\timeSlices;

class timeSlicesInfo extends Model
{
    /**
     * @var timeSlices[]
     */
    public $timeSlices;
    protected $_name = [
        'timeSlices' => 'TimeSlices',
    ];

    public function validate()
    {
        if (\is_array($this->timeSlices)) {
            Model::validateArray($this->timeSlices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeSlices) {
            if (\is_array($this->timeSlices)) {
                $res['TimeSlices'] = [];
                $n1 = 0;
                foreach ($this->timeSlices as $item1) {
                    $res['TimeSlices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TimeSlices'])) {
            if (!empty($map['TimeSlices'])) {
                $model->timeSlices = [];
                $n1 = 0;
                foreach ($map['TimeSlices'] as $item1) {
                    $model->timeSlices[$n1] = timeSlices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
