<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

class blockedUrlList extends Model
{
    /**
     * @var string[]
     */
    public $blockedUrlList;
    protected $_name = [
        'blockedUrlList' => 'blocked_url_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockedUrlList) {
            $res['blocked_url_list'] = $this->blockedUrlList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockedUrlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['blocked_url_list'])) {
            if (!empty($map['blocked_url_list'])) {
                $model->blockedUrlList = $map['blocked_url_list'];
            }
        }

        return $model;
    }
}
