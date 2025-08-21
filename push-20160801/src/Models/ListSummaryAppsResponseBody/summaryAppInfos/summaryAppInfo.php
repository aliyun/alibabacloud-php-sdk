<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponseBody\summaryAppInfos;

use AlibabaCloud\Dara\Model;

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
        'appKey' => 'AppKey',
        'appName' => 'AppName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
