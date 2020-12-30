<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePkgVersionsResponseBody\pkgVersions;

use AlibabaCloud\Tea\Model;

class pkgVersion extends Model
{
    /**
     * @var string
     */
    public $createUsername;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $pkgVersionLabel;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $packageSource;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $packageETag;

    /**
     * @var string
     */
    public $pkgVersionId;

    /**
     * @var string
     */
    public $pkgVersionDescription;
    protected $_name = [
        'createUsername'        => 'CreateUsername',
        'appName'               => 'AppName',
        'updateTime'            => 'UpdateTime',
        'pkgVersionLabel'       => 'PkgVersionLabel',
        'createTime'            => 'CreateTime',
        'packageSource'         => 'PackageSource',
        'appId'                 => 'AppId',
        'packageETag'           => 'PackageETag',
        'pkgVersionId'          => 'PkgVersionId',
        'pkgVersionDescription' => 'PkgVersionDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createUsername) {
            $res['CreateUsername'] = $this->createUsername;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->pkgVersionLabel) {
            $res['PkgVersionLabel'] = $this->pkgVersionLabel;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->packageSource) {
            $res['PackageSource'] = $this->packageSource;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->packageETag) {
            $res['PackageETag'] = $this->packageETag;
        }
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }
        if (null !== $this->pkgVersionDescription) {
            $res['PkgVersionDescription'] = $this->pkgVersionDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pkgVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateUsername'])) {
            $model->createUsername = $map['CreateUsername'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['PkgVersionLabel'])) {
            $model->pkgVersionLabel = $map['PkgVersionLabel'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PackageSource'])) {
            $model->packageSource = $map['PackageSource'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PackageETag'])) {
            $model->packageETag = $map['PackageETag'];
        }
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }
        if (isset($map['PkgVersionDescription'])) {
            $model->pkgVersionDescription = $map['PkgVersionDescription'];
        }

        return $model;
    }
}
