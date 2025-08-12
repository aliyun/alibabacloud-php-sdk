<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->trafficHijackElementWhitelist)) {
            Model::validateArray($this->trafficHijackElementWhitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficHijackElementWhitelist) {
            if (\is_array($this->trafficHijackElementWhitelist)) {
                $res['traffic_hijack_element_whitelist'] = [];
                $n1 = 0;
                foreach ($this->trafficHijackElementWhitelist as $item1) {
                    $res['traffic_hijack_element_whitelist'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['traffic_hijack_element_whitelist'])) {
            if (!empty($map['traffic_hijack_element_whitelist'])) {
                $model->trafficHijackElementWhitelist = [];
                $n1 = 0;
                foreach ($map['traffic_hijack_element_whitelist'] as $item1) {
                    $model->trafficHijackElementWhitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
