<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetClientConfigRequest extends Model
{
    /**
     * @description 云端配置所对应的IOS BundleId
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description 云端配置所对应的包名。
     *
     * @var string
     */
    public $pkgName;

    /**
     * @description 云端配置所对应的包签名
     *
     * @var string
     */
    public $pkgSignature;
    protected $_name = [
        'bundleId'     => 'BundleId',
        'pkgName'      => 'PkgName',
        'pkgSignature' => 'PkgSignature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }
        if (null !== $this->pkgSignature) {
            $res['PkgSignature'] = $this->pkgSignature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClientConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }
        if (isset($map['PkgSignature'])) {
            $model->pkgSignature = $map['PkgSignature'];
        }

        return $model;
    }
}
