<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

class GetEnterpriseSupportPlanDetailRequest extends Model
{
    /**
     * @var string[]
     */
    public $freeOrderApplyCodes;

    /**
     * @var int[]
     */
    public $orderIds;
    protected $_name = [
        'freeOrderApplyCodes' => 'freeOrderApplyCodes',
        'orderIds'            => 'orderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->freeOrderApplyCodes) {
            $res['freeOrderApplyCodes'] = $this->freeOrderApplyCodes;
        }
        if (null !== $this->orderIds) {
            $res['orderIds'] = $this->orderIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEnterpriseSupportPlanDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['freeOrderApplyCodes'])) {
            if (!empty($map['freeOrderApplyCodes'])) {
                $model->freeOrderApplyCodes = $map['freeOrderApplyCodes'];
            }
        }
        if (isset($map['orderIds'])) {
            if (!empty($map['orderIds'])) {
                $model->orderIds = $map['orderIds'];
            }
        }

        return $model;
    }
}
