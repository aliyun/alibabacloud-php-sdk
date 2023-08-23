<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

class trafficHijackElementWhitelist extends Model
{
    /**
     * @var string[]
     */
    public $trafficHijackElementWhitelist;
    protected $_name = [
        'trafficHijackElementWhitelist' => 'traffic_hijack_element_whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficHijackElementWhitelist) {
            $res['traffic_hijack_element_whitelist'] = $this->trafficHijackElementWhitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficHijackElementWhitelist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['traffic_hijack_element_whitelist'])) {
            if (!empty($map['traffic_hijack_element_whitelist'])) {
                $model->trafficHijackElementWhitelist = $map['traffic_hijack_element_whitelist'];
            }
        }

        return $model;
    }
}
