<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;

use AlibabaCloud\Tea\Model;

class eventMonitor extends Model
{
    /**
     * @description The used quota of detection points that are provided by Alibaba Cloud in site monitoring in your purchased plan.
     *
     * >  The value indicates the total number of detection points provided by Alibaba Cloud that are used by existing site monitoring tasks.
     * @example 55
     *
     * @var int
     */
    public $quotaLimit;

    /**
     * @description The details about the quota of custom monitoring.
     *
     * @example 50
     *
     * @var int
     */
    public $quotaPackage;

    /**
     * @description The description of the instance.
     *
     * @example 2
     *
     * @var int
     */
    public $quotaUsed;
    protected $_name = [
        'quotaLimit'   => 'QuotaLimit',
        'quotaPackage' => 'QuotaPackage',
        'quotaUsed'    => 'QuotaUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaLimit) {
            $res['QuotaLimit'] = $this->quotaLimit;
        }
        if (null !== $this->quotaPackage) {
            $res['QuotaPackage'] = $this->quotaPackage;
        }
        if (null !== $this->quotaUsed) {
            $res['QuotaUsed'] = $this->quotaUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventMonitor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaLimit'])) {
            $model->quotaLimit = $map['QuotaLimit'];
        }
        if (isset($map['QuotaPackage'])) {
            $model->quotaPackage = $map['QuotaPackage'];
        }
        if (isset($map['QuotaUsed'])) {
            $model->quotaUsed = $map['QuotaUsed'];
        }

        return $model;
    }
}
