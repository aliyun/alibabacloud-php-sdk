<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListLFUAppResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var bool
     */
    public $isAuth;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'appVersion'     => 'AppVersion',
        'appVersionName' => 'AppVersionName',
        'iconUrl'        => 'IconUrl',
        'isAuth'         => 'IsAuth',
        'osType'         => 'OsType',
        'requestId'      => 'RequestId',
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
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }
        if (null !== $this->isAuth) {
            $res['IsAuth'] = $this->isAuth;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }
        if (isset($map['IsAuth'])) {
            $model->isAuth = $map['IsAuth'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
