<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

class browserHosts extends Model
{
    /**
     * @var string[]
     */
    public $browserHosts;
    protected $_name = [
        'browserHosts' => 'browser_hosts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->browserHosts) {
            $res['browser_hosts'] = $this->browserHosts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return browserHosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['browser_hosts'])) {
            if (!empty($map['browser_hosts'])) {
                $model->browserHosts = $map['browser_hosts'];
            }
        }

        return $model;
    }
}
