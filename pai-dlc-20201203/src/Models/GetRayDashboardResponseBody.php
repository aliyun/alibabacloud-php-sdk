<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetRayDashboardResponseBody extends Model
{
    /**
     * @description Indicates whether the dashboard has been integrated with CloudMonitor and supports ray metrics
     *
     * @example true
     *
     * @var string
     */
    public $metricsEnabled;

    /**
     * @description The Ray Dashboard URL
     *
     * @example https://pre-pai-dlc-proxy-cn-hangzhou.aliyun.com/ray/dashboard/dlc1k7426goc7bvy
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'metricsEnabled' => 'metricsEnabled',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricsEnabled) {
            $res['metricsEnabled'] = $this->metricsEnabled;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRayDashboardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['metricsEnabled'])) {
            $model->metricsEnabled = $map['metricsEnabled'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
