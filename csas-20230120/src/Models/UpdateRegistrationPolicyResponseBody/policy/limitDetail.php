<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyResponseBody\policy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyResponseBody\policy\limitDetail\limitCount;

class limitDetail extends Model
{
    /**
     * @var string
     */
    public $deviceBelong;

    /**
     * @var limitCount
     */
    public $limitCount;

    /**
     * @var string
     */
    public $limitType;
    protected $_name = [
        'deviceBelong' => 'DeviceBelong',
        'limitCount' => 'LimitCount',
        'limitType' => 'LimitType',
    ];

    public function validate()
    {
        if (null !== $this->limitCount) {
            $this->limitCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceBelong) {
            $res['DeviceBelong'] = $this->deviceBelong;
        }

        if (null !== $this->limitCount) {
            $res['LimitCount'] = null !== $this->limitCount ? $this->limitCount->toArray($noStream) : $this->limitCount;
        }

        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
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
