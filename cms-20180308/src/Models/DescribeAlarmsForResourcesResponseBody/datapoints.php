<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmsForResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmsForResourcesResponseBody\datapoints\alarm;

class datapoints extends Model
{
    /**
     * @var alarm[]
     */
    public $alarm;
    protected $_name = [
        'alarm' => 'Alarm',
    ];

    public function validate()
    {
        if (\is_array($this->alarm)) {
            Model::validateArray($this->alarm);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarm) {
            if (\is_array($this->alarm)) {
                $res['Alarm'] = [];
                $n1 = 0;
                foreach ($this->alarm as $item1) {
                    $res['Alarm'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Alarm'])) {
            if (!empty($map['Alarm'])) {
                $model->alarm = [];
                $n1 = 0;
                foreach ($map['Alarm'] as $item1) {
                    $model->alarm[$n1++] = alarm::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
