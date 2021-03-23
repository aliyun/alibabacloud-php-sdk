<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class clientPluginVersions extends Model
{
    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var int
     */
    public $versionCode;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $downloadUrl;
    protected $_name = [
        'pkgName'     => 'PkgName',
        'versionCode' => 'VersionCode',
        'version'     => 'Version',
        'size'        => 'Size',
        'id'          => 'Id',
        'downloadUrl' => 'DownloadUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientPluginVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        return $model;
    }
}
