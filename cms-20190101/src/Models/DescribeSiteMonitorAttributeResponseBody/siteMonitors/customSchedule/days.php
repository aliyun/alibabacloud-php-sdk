<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\customSchedule;

use AlibabaCloud\Dara\Model;

class days extends Model
{
    /**
     * @var int[]
     */
    public $days;
    protected $_name = [
        'days' => 'days',
    ];

    public function validate()
    {
        if (\is_array($this->days)) {
            Model::validateArray($this->days);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->days) {
            if (\is_array($this->days)) {
                $res['days'] = [];
                $n1 = 0;
                foreach ($this->days as $item1) {
                    $res['days'][$n1] = $item1;
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
        if (isset($map['days'])) {
            if (!empty($map['days'])) {
                $model->days = [];
                $n1 = 0;
                foreach ($map['days'] as $item1) {
                    $model->days[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
