<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeEnsResourceUsageRequest extends Model
{
    /**
     * @var string
     */
    public $expiredEndTime;

    /**
     * @var string
     */
    public $expiredStartTime;
    protected $_name = [
        'expiredEndTime' => 'ExpiredEndTime',
        'expiredStartTime' => 'ExpiredStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiredEndTime) {
            $res['ExpiredEndTime'] = $this->expiredEndTime;
        }

        if (null !== $this->expiredStartTime) {
            $res['ExpiredStartTime'] = $this->expiredStartTime;
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
        if (isset($map['ExpiredEndTime'])) {
            $model->expiredEndTime = $map['ExpiredEndTime'];
        }

        if (isset($map['ExpiredStartTime'])) {
            $model->expiredStartTime = $map['ExpiredStartTime'];
        }

        return $model;
    }
}
