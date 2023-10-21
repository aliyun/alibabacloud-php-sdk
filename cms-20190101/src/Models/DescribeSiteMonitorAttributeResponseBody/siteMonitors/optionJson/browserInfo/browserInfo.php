<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserInfo;

use AlibabaCloud\Tea\Model;

class browserInfo extends Model
{
    /**
     * @example Chrome
     *
     * @var string
     */
    public $browser;

    /**
     * @example laptop
     *
     * @var string
     */
    public $device;
    protected $_name = [
        'browser' => 'browser',
        'device'  => 'device',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->browser) {
            $res['browser'] = $this->browser;
        }
        if (null !== $this->device) {
            $res['device'] = $this->device;
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
        if (isset($map['browser'])) {
            $model->browser = $map['browser'];
        }
        if (isset($map['device'])) {
            $model->device = $map['device'];
        }

        return $model;
    }
}
