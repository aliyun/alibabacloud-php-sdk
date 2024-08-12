<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class version extends Model
{
    /**
     * @var string
     */
    public $androidHorizontalMultiCnImageDownloadUrl;

    /**
     * @var string
     */
    public $androidHorizontalMultiEnImageDownloadUrl;

    /**
     * @var string
     */
    public $androidVerticalMultiCnImageDownloadUrl;

    /**
     * @var string
     */
    public $androidVerticalMultiEnImageDownloadUrl;

    /**
     * @var string
     */
    public $cnImageDownloadUrl;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $customForceUpgrade;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $enImageDownloadUrl;

    /**
     * @var int
     */
    public $forceUpgrade;

    /**
     * @var bool
     */
    public $isAppDownloadUrl;

    /**
     * @var string
     */
    public $localDownloadUrl;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $multiCnImageDownloadUrl;

    /**
     * @var string
     */
    public $multiEnImageDownloadUrl;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $releaseNoteEn;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $versionType;
    protected $_name = [
        'androidHorizontalMultiCnImageDownloadUrl' => 'AndroidHorizontalMultiCnImageDownloadUrl',
        'androidHorizontalMultiEnImageDownloadUrl' => 'AndroidHorizontalMultiEnImageDownloadUrl',
        'androidVerticalMultiCnImageDownloadUrl'   => 'AndroidVerticalMultiCnImageDownloadUrl',
        'androidVerticalMultiEnImageDownloadUrl'   => 'AndroidVerticalMultiEnImageDownloadUrl',
        'cnImageDownloadUrl'                       => 'CnImageDownloadUrl',
        'creator'                                  => 'Creator',
        'customForceUpgrade'                       => 'CustomForceUpgrade',
        'downloadUrl'                              => 'DownloadUrl',
        'enImageDownloadUrl'                       => 'EnImageDownloadUrl',
        'forceUpgrade'                             => 'ForceUpgrade',
        'isAppDownloadUrl'                         => 'IsAppDownloadUrl',
        'localDownloadUrl'                         => 'LocalDownloadUrl',
        'md5'                                      => 'Md5',
        'model'                                    => 'Model',
        'multiCnImageDownloadUrl'                  => 'MultiCnImageDownloadUrl',
        'multiEnImageDownloadUrl'                  => 'MultiEnImageDownloadUrl',
        'releaseNote'                              => 'ReleaseNote',
        'releaseNoteEn'                            => 'ReleaseNoteEn',
        'size'                                     => 'Size',
        'version'                                  => 'Version',
        'versionCode'                              => 'VersionCode',
        'versionType'                              => 'VersionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidHorizontalMultiCnImageDownloadUrl) {
            $res['AndroidHorizontalMultiCnImageDownloadUrl'] = $this->androidHorizontalMultiCnImageDownloadUrl;
        }
        if (null !== $this->androidHorizontalMultiEnImageDownloadUrl) {
            $res['AndroidHorizontalMultiEnImageDownloadUrl'] = $this->androidHorizontalMultiEnImageDownloadUrl;
        }
        if (null !== $this->androidVerticalMultiCnImageDownloadUrl) {
            $res['AndroidVerticalMultiCnImageDownloadUrl'] = $this->androidVerticalMultiCnImageDownloadUrl;
        }
        if (null !== $this->androidVerticalMultiEnImageDownloadUrl) {
            $res['AndroidVerticalMultiEnImageDownloadUrl'] = $this->androidVerticalMultiEnImageDownloadUrl;
        }
        if (null !== $this->cnImageDownloadUrl) {
            $res['CnImageDownloadUrl'] = $this->cnImageDownloadUrl;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->customForceUpgrade) {
            $res['CustomForceUpgrade'] = $this->customForceUpgrade;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->enImageDownloadUrl) {
            $res['EnImageDownloadUrl'] = $this->enImageDownloadUrl;
        }
        if (null !== $this->forceUpgrade) {
            $res['ForceUpgrade'] = $this->forceUpgrade;
        }
        if (null !== $this->isAppDownloadUrl) {
            $res['IsAppDownloadUrl'] = $this->isAppDownloadUrl;
        }
        if (null !== $this->localDownloadUrl) {
            $res['LocalDownloadUrl'] = $this->localDownloadUrl;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->multiCnImageDownloadUrl) {
            $res['MultiCnImageDownloadUrl'] = $this->multiCnImageDownloadUrl;
        }
        if (null !== $this->multiEnImageDownloadUrl) {
            $res['MultiEnImageDownloadUrl'] = $this->multiEnImageDownloadUrl;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseNoteEn) {
            $res['ReleaseNoteEn'] = $this->releaseNoteEn;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return version
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidHorizontalMultiCnImageDownloadUrl'])) {
            $model->androidHorizontalMultiCnImageDownloadUrl = $map['AndroidHorizontalMultiCnImageDownloadUrl'];
        }
        if (isset($map['AndroidHorizontalMultiEnImageDownloadUrl'])) {
            $model->androidHorizontalMultiEnImageDownloadUrl = $map['AndroidHorizontalMultiEnImageDownloadUrl'];
        }
        if (isset($map['AndroidVerticalMultiCnImageDownloadUrl'])) {
            $model->androidVerticalMultiCnImageDownloadUrl = $map['AndroidVerticalMultiCnImageDownloadUrl'];
        }
        if (isset($map['AndroidVerticalMultiEnImageDownloadUrl'])) {
            $model->androidVerticalMultiEnImageDownloadUrl = $map['AndroidVerticalMultiEnImageDownloadUrl'];
        }
        if (isset($map['CnImageDownloadUrl'])) {
            $model->cnImageDownloadUrl = $map['CnImageDownloadUrl'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CustomForceUpgrade'])) {
            $model->customForceUpgrade = $map['CustomForceUpgrade'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['EnImageDownloadUrl'])) {
            $model->enImageDownloadUrl = $map['EnImageDownloadUrl'];
        }
        if (isset($map['ForceUpgrade'])) {
            $model->forceUpgrade = $map['ForceUpgrade'];
        }
        if (isset($map['IsAppDownloadUrl'])) {
            $model->isAppDownloadUrl = $map['IsAppDownloadUrl'];
        }
        if (isset($map['LocalDownloadUrl'])) {
            $model->localDownloadUrl = $map['LocalDownloadUrl'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['MultiCnImageDownloadUrl'])) {
            $model->multiCnImageDownloadUrl = $map['MultiCnImageDownloadUrl'];
        }
        if (isset($map['MultiEnImageDownloadUrl'])) {
            $model->multiEnImageDownloadUrl = $map['MultiEnImageDownloadUrl'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseNoteEn'])) {
            $model->releaseNoteEn = $map['ReleaseNoteEn'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }

        return $model;
    }
}
