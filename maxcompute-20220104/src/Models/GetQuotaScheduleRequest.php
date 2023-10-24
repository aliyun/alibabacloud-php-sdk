<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetQuotaScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $displayTimezone;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the tenant.
     *
     * @example 478403690625249
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'displayTimezone' => 'displayTimezone',
        'region'          => 'region',
        'tenantId'        => 'tenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayTimezone) {
            $res['displayTimezone'] = $this->displayTimezone;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayTimezone'])) {
            $model->displayTimezone = $map['displayTimezone'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
