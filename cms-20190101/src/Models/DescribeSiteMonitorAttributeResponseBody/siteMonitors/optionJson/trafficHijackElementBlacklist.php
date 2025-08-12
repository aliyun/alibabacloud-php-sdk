<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->trafficHijackElementBlacklist)) {
            Model::validateArray($this->trafficHijackElementBlacklist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficHijackElementBlacklist) {
            if (\is_array($this->trafficHijackElementBlacklist)) {
                $res['traffic_hijack_element_blacklist'] = [];
                $n1 = 0;
                foreach ($this->trafficHijackElementBlacklist as $item1) {
                    $res['traffic_hijack_element_blacklist'][$n1] = $item1;
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
        if (isset($map['traffic_hijack_element_blacklist'])) {
            if (!empty($map['traffic_hijack_element_blacklist'])) {
                $model->trafficHijackElementBlacklist = [];
                $n1 = 0;
                foreach ($map['traffic_hijack_element_blacklist'] as $item1) {
                    $model->trafficHijackElementBlacklist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
