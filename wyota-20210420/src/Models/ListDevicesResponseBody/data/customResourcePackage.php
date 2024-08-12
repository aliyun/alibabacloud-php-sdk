<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class customResourcePackage extends Model
{
    /**
     * @var string
     */
    public $configAboutLogo;

    /**
     * @var string
     */
    public $desktopWallpaper;

    /**
     * @var string
     */
    public $loginPageBackground;

    /**
     * @var string
     */
    public $loginPageLogo;

    /**
     * @var string
     */
    public $personalCenterLogo;

    /**
     * @var string
     */
    public $startLogo;

    /**
     * @var string
     */
    public $startMenuLogo;

    /**
     * @var string
     */
    public $upgradeLogo;
    protected $_name = [
        'configAboutLogo'     => 'ConfigAboutLogo',
        'desktopWallpaper'    => 'DesktopWallpaper',
        'loginPageBackground' => 'LoginPageBackground',
        'loginPageLogo'       => 'LoginPageLogo',
        'personalCenterLogo'  => 'PersonalCenterLogo',
        'startLogo'           => 'StartLogo',
        'startMenuLogo'       => 'StartMenuLogo',
        'upgradeLogo'         => 'UpgradeLogo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configAboutLogo) {
            $res['ConfigAboutLogo'] = $this->configAboutLogo;
        }
        if (null !== $this->desktopWallpaper) {
            $res['DesktopWallpaper'] = $this->desktopWallpaper;
        }
        if (null !== $this->loginPageBackground) {
            $res['LoginPageBackground'] = $this->loginPageBackground;
        }
        if (null !== $this->loginPageLogo) {
            $res['LoginPageLogo'] = $this->loginPageLogo;
        }
        if (null !== $this->personalCenterLogo) {
            $res['PersonalCenterLogo'] = $this->personalCenterLogo;
        }
        if (null !== $this->startLogo) {
            $res['StartLogo'] = $this->startLogo;
        }
        if (null !== $this->startMenuLogo) {
            $res['StartMenuLogo'] = $this->startMenuLogo;
        }
        if (null !== $this->upgradeLogo) {
            $res['UpgradeLogo'] = $this->upgradeLogo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customResourcePackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigAboutLogo'])) {
            $model->configAboutLogo = $map['ConfigAboutLogo'];
        }
        if (isset($map['DesktopWallpaper'])) {
            $model->desktopWallpaper = $map['DesktopWallpaper'];
        }
        if (isset($map['LoginPageBackground'])) {
            $model->loginPageBackground = $map['LoginPageBackground'];
        }
        if (isset($map['LoginPageLogo'])) {
            $model->loginPageLogo = $map['LoginPageLogo'];
        }
        if (isset($map['PersonalCenterLogo'])) {
            $model->personalCenterLogo = $map['PersonalCenterLogo'];
        }
        if (isset($map['StartLogo'])) {
            $model->startLogo = $map['StartLogo'];
        }
        if (isset($map['StartMenuLogo'])) {
            $model->startMenuLogo = $map['StartMenuLogo'];
        }
        if (isset($map['UpgradeLogo'])) {
            $model->upgradeLogo = $map['UpgradeLogo'];
        }

        return $model;
    }
}
