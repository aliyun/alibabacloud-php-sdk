<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\customSchedule;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['days'] = $this->days;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return days
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['days'])) {
            if (!empty($map['days'])) {
                $model->days = $map['days'];
            }
        }

        return $model;
    }
}
