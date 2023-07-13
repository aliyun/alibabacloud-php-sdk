<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;

use AlibabaCloud\Tea\Model;

class logMonitor extends Model
{
    /**
     * @description The used quota of events that can be reported in event monitoring in your purchased plan. The product of multiplying the value and 10,000 indicates the used quota.
     *
     * @example 150
     *
     * @var int
     */
    public $quotaLimit;

    /**
     * @description The details about the resource quotas of CloudMonitor.
     *
     * @example 150
     *
     * @var int
     */
    public $quotaPackage;

    /**
     * @description The used quota of alert text messages in your purchased resource plan.
     *
     * @example 80
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
     * @return logMonitor
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
