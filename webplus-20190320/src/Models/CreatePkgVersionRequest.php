<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class CreatePkgVersionRequest extends Model
{
    /**
     * @var string
     */
    public $pkgVersionLabel;

    /**
     * @var string
     */
    public $pkgVersionDescription;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $packageSource;
    protected $_name = [
        'pkgVersionLabel'       => 'PkgVersionLabel',
        'pkgVersionDescription' => 'PkgVersionDescription',
        'appId'                 => 'AppId',
        'packageSource'         => 'PackageSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pkgVersionLabel) {
            $res['PkgVersionLabel'] = $this->pkgVersionLabel;
        }
        if (null !== $this->pkgVersionDescription) {
            $res['PkgVersionDescription'] = $this->pkgVersionDescription;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->packageSource) {
            $res['PackageSource'] = $this->packageSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePkgVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PkgVersionLabel'])) {
            $model->pkgVersionLabel = $map['PkgVersionLabel'];
        }
        if (isset($map['PkgVersionDescription'])) {
            $model->pkgVersionDescription = $map['PkgVersionDescription'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PackageSource'])) {
            $model->packageSource = $map['PackageSource'];
        }

        return $model;
    }
}
