<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

class browserInfo extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserInfo\browserInfo[]
     */
    public $browserInfo;
    protected $_name = [
        'browserInfo' => 'browser_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->browserInfo) {
            $res['browser_info'] = [];
            if (null !== $this->browserInfo && \is_array($this->browserInfo)) {
                $n = 0;
                foreach ($this->browserInfo as $item) {
                    $res['browser_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return browserInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['browser_info'])) {
            if (!empty($map['browser_info'])) {
                $model->browserInfo = [];
                $n                  = 0;
                foreach ($map['browser_info'] as $item) {
                    $model->browserInfo[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserInfo\browserInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
