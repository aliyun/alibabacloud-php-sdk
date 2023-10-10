<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class entryApplication extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example bdb251cc-02a6-48dd-891b-2ab21b25c****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example test-app
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
