<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListPublishedAppInfoResponseBody;

use AlibabaCloud\Dara\Model;

class appModels extends Model
{
    /**
     * @var string
     */
    public $appCenterImageId;

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
    public $appThemeColor;

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
    public $authTime;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var bool
     */
    public $isAuth;

    /**
     * @var bool
     */
    public $usedInSession;
    protected $_name = [
        'appCenterImageId' => 'AppCenterImageId',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appThemeColor' => 'AppThemeColor',
        'appVersion' => 'AppVersion',
        'appVersionName' => 'AppVersionName',
        'authTime' => 'AuthTime',
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'iconUrl' => 'IconUrl',
        'isAuth' => 'IsAuth',
        'usedInSession' => 'UsedInSession',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appThemeColor) {
            $res['AppThemeColor'] = $this->appThemeColor;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }

        if (null !== $this->authTime) {
            $res['AuthTime'] = $this->authTime;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->isAuth) {
            $res['IsAuth'] = $this->isAuth;
        }

        if (null !== $this->usedInSession) {
            $res['UsedInSession'] = $this->usedInSession;
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
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppThemeColor'])) {
            $model->appThemeColor = $map['AppThemeColor'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }

        if (isset($map['AuthTime'])) {
            $model->authTime = $map['AuthTime'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['IsAuth'])) {
            $model->isAuth = $map['IsAuth'];
        }

        if (isset($map['UsedInSession'])) {
            $model->usedInSession = $map['UsedInSession'];
        }

        return $model;
    }
}
