<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

class trafficHijackElementBlacklist extends Model
{
    /**
     * @var string[]
     */
    public $trafficHijackElementBlacklist;
    protected $_name = [
        'trafficHijackElementBlacklist' => 'traffic_hijack_element_blacklist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficHijackElementBlacklist) {
            $res['traffic_hijack_element_blacklist'] = $this->trafficHijackElementBlacklist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficHijackElementBlacklist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['traffic_hijack_element_blacklist'])) {
            if (!empty($map['traffic_hijack_element_blacklist'])) {
                $model->trafficHijackElementBlacklist = $map['traffic_hijack_element_blacklist'];
            }
        }

        return $model;
    }
}
