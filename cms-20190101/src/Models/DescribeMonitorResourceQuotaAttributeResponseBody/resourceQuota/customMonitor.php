<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;

use AlibabaCloud\Tea\Model;

class customMonitor extends Model
{
    /**
     * @description The total quota of alert phone calls. Unit: calls.
     *
     * @example 1200
     *
     * @var int
     */
    public $quotaLimit;

    /**
     * @description The quota of site monitoring tasks.
     *
     * @example 1000
     *
     * @var int
     */
    public $quotaPackage;

    /**
     * @description The total quota of events that can be reported in event monitoring. The total quota is the value that is multiplied by 10,000.
     *
     * @example 8
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
     * @return customMonitor
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
