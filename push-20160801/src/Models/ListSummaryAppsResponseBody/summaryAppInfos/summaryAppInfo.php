<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponseBody\summaryAppInfos;

use AlibabaCloud\Tea\Model;

class summaryAppInfo extends Model
{
    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;
    protected $_name = [
        'appKey'  => 'AppKey',
        'appName' => 'AppName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryAppInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
