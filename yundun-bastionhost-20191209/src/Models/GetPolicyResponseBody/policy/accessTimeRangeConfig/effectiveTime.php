<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\accessTimeRangeConfig;

use AlibabaCloud\Tea\Model;

class effectiveTime extends Model
{
    /**
     * @var string[]
     */
    public $days;

    /**
     * @var string[]
     */
    public $hours;
    protected $_name = [
        'days'  => 'Days',
        'hours' => 'Hours',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->hours) {
            $res['Hours'] = $this->hours;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return effectiveTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Days'])) {
            if (!empty($map['Days'])) {
                $model->days = $map['Days'];
            }
        }
        if (isset($map['Hours'])) {
            if (!empty($map['Hours'])) {
                $model->hours = $map['Hours'];
            }
        }

        return $model;
    }
}
