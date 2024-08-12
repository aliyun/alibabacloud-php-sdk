<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoTestResponseBody\data;

use AlibabaCloud\Tea\Model;

class version extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var int
     */
    public $forceUpgrade;

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
    public $releaseNote;

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
        'creator'          => 'Creator',
        'downloadUrl'      => 'DownloadUrl',
        'forceUpgrade'     => 'ForceUpgrade',
        'localDownloadUrl' => 'LocalDownloadUrl',
        'md5'              => 'Md5',
        'model'            => 'Model',
        'releaseNote'      => 'ReleaseNote',
        'size'             => 'Size',
        'version'          => 'Version',
        'versionCode'      => 'VersionCode',
        'versionType'      => 'VersionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->forceUpgrade) {
            $res['ForceUpgrade'] = $this->forceUpgrade;
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
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ForceUpgrade'])) {
            $model->forceUpgrade = $map['ForceUpgrade'];
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
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
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
