<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesResponseBody\policies;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesResponseBody\policies\limitDetail\limitCount;
use AlibabaCloud\Tea\Model;

class limitDetail extends Model
{
    /**
     * @example Company
     *
     * @var string
     */
    public $deviceBelong;

    /**
     * @var limitCount
     */
    public $limitCount;

    /**
     * @example LimitAll
     *
     * @var string
     */
    public $limitType;
    protected $_name = [
        'deviceBelong' => 'DeviceBelong',
        'limitCount'   => 'LimitCount',
        'limitType'    => 'LimitType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceBelong) {
            $res['DeviceBelong'] = $this->deviceBelong;
        }
        if (null !== $this->limitCount) {
            $res['LimitCount'] = null !== $this->limitCount ? $this->limitCount->toMap() : null;
        }
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return limitDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceBelong'])) {
            $model->deviceBelong = $map['DeviceBelong'];
        }
        if (isset($map['LimitCount'])) {
            $model->limitCount = limitCount::fromMap($map['LimitCount']);
        }
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        return $model;
    }
}
