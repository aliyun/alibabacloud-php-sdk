<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody\data\applicationList;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example bdb251cc-02a6-48dd-891b-2ab21b25****
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
     * @return application
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
