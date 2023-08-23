<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

class browserHeaders extends Model
{
    /**
     * @var mixed[][]
     */
    public $browserHeaders;
    protected $_name = [
        'browserHeaders' => 'browser_headers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->browserHeaders) {
            $res['browser_headers'] = $this->browserHeaders;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return browserHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['browser_headers'])) {
            if (!empty($map['browser_headers'])) {
                $model->browserHeaders = $map['browser_headers'];
            }
        }

        return $model;
    }
}
