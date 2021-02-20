<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponseBody\applications\application\appList;

use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appInfo;
    protected $_name = [
        'appId'   => 'AppId',
        'appInfo' => 'AppInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInfo) {
            $res['AppInfo'] = $this->appInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return app
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInfo'])) {
            $model->appInfo = $map['AppInfo'];
        }

        return $model;
    }
}
