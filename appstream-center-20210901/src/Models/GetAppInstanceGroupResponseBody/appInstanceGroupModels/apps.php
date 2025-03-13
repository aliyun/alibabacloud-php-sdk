<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels;

use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @var string
     */
    public $appIcon;

    /**
     * @example ca-i87mycyn419nu****
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $appVersionName;
    protected $_name = [
        'appIcon'        => 'AppIcon',
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'appVersion'     => 'AppVersion',
        'appVersionName' => 'AppVersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIcon) {
            $res['AppIcon'] = $this->appIcon;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIcon'])) {
            $model->appIcon = $map['AppIcon'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }

        return $model;
    }
}
