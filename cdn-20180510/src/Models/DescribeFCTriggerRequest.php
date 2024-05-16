<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeFCTriggerRequest extends Model
{
    /**
     * @description The trigger that corresponds to the Function Compute service.
     *
     * This parameter is required.
     * @example acs:cdn:{RegionID}:{AccountID}:{Filter}
     *
     * @var string
     */
    public $triggerARN;
    protected $_name = [
        'triggerARN' => 'TriggerARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->triggerARN) {
            $res['TriggerARN'] = $this->triggerARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFCTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TriggerARN'])) {
            $model->triggerARN = $map['TriggerARN'];
        }

        return $model;
    }
}
