<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListPublishedAppInfoResponseBody;

use AlibabaCloud\Tea\Model;

class appModels extends Model
{
    /**
     * @example img-f37nddbjc1lje14st
     *
     * @var string
     */
    public $appCenterImageId;

    /**
     * @example ca-fxwp4koyr5y2sp4mz
     *
     * @var string
     */
    public $appId;

    /**
     * @example Microsoft Word
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appThemeColor;

    /**
     * @example R2021a
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example v1.0
     *
     * @var string
     */
    public $appVersionName;

    /**
     * @var string
     */
    public $authTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 1
     *
     * @var int
     */
    public $categoryType;

    /**
     * @example https://app-streaming-icon-prod-shanghai.oss-cn-shanghai.aliyuncs.com/tenant/1973619010349344/1634523814270_Matlab.png
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @example True
     *
     * @var bool
     */
    public $isAuth;

    /**
     * @example True
     *
     * @var bool
     */
    public $usedInSession;
    protected $_name = [
        'appCenterImageId' => 'AppCenterImageId',
        'appId'            => 'AppId',
        'appName'          => 'AppName',
        'appThemeColor'    => 'AppThemeColor',
        'appVersion'       => 'AppVersion',
        'appVersionName'   => 'AppVersionName',
        'authTime'         => 'AuthTime',
        'categoryId'       => 'CategoryId',
        'categoryType'     => 'CategoryType',
        'iconUrl'          => 'IconUrl',
        'isAuth'           => 'IsAuth',
        'usedInSession'    => 'UsedInSession',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return appModels
     */
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
