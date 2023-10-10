<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class entryApplication extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example d52c9de9-53d0-4191-aa72-88974a6f****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example test-gateway
     *
     * @var string
     */
    public $appName;
    protected $_name = [
        'appId'   => 'AppId',
        'appName' => 'AppName',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entryApplication
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
