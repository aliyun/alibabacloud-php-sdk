<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckDeviceResponseBody;

use AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckDeviceResponseBody\plans\planDto;
use AlibabaCloud\Tea\Model;

class plans extends Model
{
    /**
     * @var planDto[]
     */
    public $planDto;
    protected $_name = [
        'planDto' => 'PlanDto',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planDto) {
            $res['PlanDto'] = [];
            if (null !== $this->planDto && \is_array($this->planDto)) {
                $n = 0;
                foreach ($this->planDto as $item) {
                    $res['PlanDto'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanDto'])) {
            if (!empty($map['PlanDto'])) {
                $model->planDto = [];
                $n              = 0;
                foreach ($map['PlanDto'] as $item) {
                    $model->planDto[$n++] = null !== $item ? planDto::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
