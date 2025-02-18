<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels;

use AlibabaCloud\Dara\Model;

class apps extends Model
{
    /**
     * @var string
     */
    public $appIcon;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
