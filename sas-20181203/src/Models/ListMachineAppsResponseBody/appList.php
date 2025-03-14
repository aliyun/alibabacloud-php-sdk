<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListMachineAppsResponseBody;

use AlibabaCloud\Tea\Model;

class appList extends Model
{
    /**
     * @description SAE application ID.
     *
     * @example 5b41f4bf-349f-4263-89b1-9234c034****
     *
     * @var string
     */
    public $appId;

    /**
     * @description SAE application name.
     *
     * @example app-ubuntu
     *
     * @var string
     */
    public $appName;

    /**
     * @description Region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $appRegionId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appRegionId' => 'AppRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appRegionId) {
            $res['AppRegionId'] = $this->appRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appList
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
        if (isset($map['AppRegionId'])) {
            $model->appRegionId = $map['AppRegionId'];
        }

        return $model;
    }
}
