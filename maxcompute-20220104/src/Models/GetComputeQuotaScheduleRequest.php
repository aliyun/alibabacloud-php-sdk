<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetComputeQuotaScheduleRequest extends Model
{
    /**
     * @description Display time zone.
     *
     * @example UTC+8
     *
     * @var string
     */
    public $displayTimezone;
    protected $_name = [
        'displayTimezone' => 'displayTimezone',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayTimezone) {
            $res['displayTimezone'] = $this->displayTimezone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetComputeQuotaScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayTimezone'])) {
            $model->displayTimezone = $map['displayTimezone'];
        }

        return $model;
    }
}
