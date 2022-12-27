<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsResourceUsageRequest extends Model
{
    /**
     * @example 2018-06-15T09:07:23Z
     *
     * @var string
     */
    public $expiredEndTime;

    /**
     * @example 2018-06-15T09:07:23Z
     *
     * @var string
     */
    public $expiredStartTime;
    protected $_name = [
        'expiredEndTime'   => 'ExpiredEndTime',
        'expiredStartTime' => 'ExpiredStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeEnsResourceUsageRequest
     */
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
