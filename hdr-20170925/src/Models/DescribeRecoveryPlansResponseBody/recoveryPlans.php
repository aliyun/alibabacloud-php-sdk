<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPlansResponseBody;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPlansResponseBody\recoveryPlans\recoveryPlan;
use AlibabaCloud\Tea\Model;

class recoveryPlans extends Model
{
    /**
     * @var recoveryPlan[]
     */
    public $recoveryPlan;
    protected $_name = [
        'recoveryPlan' => 'recoveryPlan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recoveryPlan) {
            $res['recoveryPlan'] = [];
            if (null !== $this->recoveryPlan && \is_array($this->recoveryPlan)) {
                $n = 0;
                foreach ($this->recoveryPlan as $item) {
                    $res['recoveryPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoveryPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['recoveryPlan'])) {
            if (!empty($map['recoveryPlan'])) {
                $model->recoveryPlan = [];
                $n                   = 0;
                foreach ($map['recoveryPlan'] as $item) {
                    $model->recoveryPlan[$n++] = null !== $item ? recoveryPlan::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
