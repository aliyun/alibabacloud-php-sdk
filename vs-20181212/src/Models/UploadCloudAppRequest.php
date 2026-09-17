<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class UploadCloudAppRequest extends Model
{
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
    public $description;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $pkgFormat;

    /**
     * @var string[]
     */
    public $pkgLabels;

    /**
     * @var string
     */
    public $pkgType;

    /**
     * @var string
     */
    public $postCommandPath;

    /**
     * @var int
     */
    public $postCommandTimeoutSec;
    protected $_name = [
        'appName' => 'AppName',
        'appVersion' => 'AppVersion',
        'description' => 'Description',
        'downloadUrl' => 'DownloadUrl',
        'md5' => 'Md5',
        'pkgFormat' => 'PkgFormat',
        'pkgLabels' => 'PkgLabels',
        'pkgType' => 'PkgType',
        'postCommandPath' => 'PostCommandPath',
        'postCommandTimeoutSec' => 'PostCommandTimeoutSec',
    ];

    public function validate()
    {
        if (\is_array($this->pkgLabels)) {
            Model::validateArray($this->pkgLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->pkgFormat) {
            $res['PkgFormat'] = $this->pkgFormat;
        }

        if (null !== $this->pkgLabels) {
            if (\is_array($this->pkgLabels)) {
                $res['PkgLabels'] = [];
                $n1 = 0;
                foreach ($this->pkgLabels as $item1) {
                    $res['PkgLabels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pkgType) {
            $res['PkgType'] = $this->pkgType;
        }

        if (null !== $this->postCommandPath) {
            $res['PostCommandPath'] = $this->postCommandPath;
        }

        if (null !== $this->postCommandTimeoutSec) {
            $res['PostCommandTimeoutSec'] = $this->postCommandTimeoutSec;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['PkgFormat'])) {
            $model->pkgFormat = $map['PkgFormat'];
        }

        if (isset($map['PkgLabels'])) {
            if (!empty($map['PkgLabels'])) {
                $model->pkgLabels = [];
                $n1 = 0;
                foreach ($map['PkgLabels'] as $item1) {
                    $model->pkgLabels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PkgType'])) {
            $model->pkgType = $map['PkgType'];
        }

        if (isset($map['PostCommandPath'])) {
            $model->postCommandPath = $map['PostCommandPath'];
        }

        if (isset($map['PostCommandTimeoutSec'])) {
            $model->postCommandTimeoutSec = $map['PostCommandTimeoutSec'];
        }

        return $model;
    }
}
