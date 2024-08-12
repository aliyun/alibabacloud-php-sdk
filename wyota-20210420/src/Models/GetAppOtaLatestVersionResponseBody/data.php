<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetAppOtaLatestVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appVersion;

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
    public $md5;

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
    public $taskUid;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $versionType;
    protected $_name = [
        'appVersion'   => 'AppVersion',
        'downloadUrl'  => 'DownloadUrl',
        'forceUpgrade' => 'ForceUpgrade',
        'md5'          => 'Md5',
        'releaseNote'  => 'ReleaseNote',
        'size'         => 'Size',
        'taskUid'      => 'TaskUid',
        'versionCode'  => 'VersionCode',
        'versionType'  => 'VersionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->forceUpgrade) {
            $res['ForceUpgrade'] = $this->forceUpgrade;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->taskUid) {
            $res['TaskUid'] = $this->taskUid;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ForceUpgrade'])) {
            $model->forceUpgrade = $map['ForceUpgrade'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TaskUid'])) {
            $model->taskUid = $map['TaskUid'];
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
