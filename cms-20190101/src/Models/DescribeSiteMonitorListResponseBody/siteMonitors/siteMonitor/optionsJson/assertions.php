<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson;

use AlibabaCloud\Tea\Model;

class assertions extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson\assertions\assertions[]
     */
    public $assertions;
    protected $_name = [
        'assertions' => 'assertions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assertions) {
            $res['assertions'] = [];
            if (null !== $this->assertions && \is_array($this->assertions)) {
                $n = 0;
                foreach ($this->assertions as $item) {
                    $res['assertions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assertions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assertions'])) {
            if (!empty($map['assertions'])) {
                $model->assertions = [];
                $n                 = 0;
                foreach ($map['assertions'] as $item) {
                    $model->assertions[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson\assertions\assertions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
