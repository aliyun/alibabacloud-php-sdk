<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SetClientConfigRequest extends Model
{
    /**
     * @description 云端配置所对应的IOS BundleId
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description 端侧上传存储Bucket信息
     *
     * @var string
     */
    public $clientUploadBucket;

    /**
     * @description 端侧上传存储bucket下路径信息
     *
     * @var string
     */
    public $clientUploadPath;

    /**
     * @description 端侧上传存储类型，vod_oss_bucket: vod托管bucket，user_oss_bucket: 用户私有bucket
     *
     * @var string
     */
    public $clientUploadStorageType;

    /**
     * @description 云端配置所对应的安卓包名。
     *
     * @var string
     */
    public $pkgName;

    /**
     * @description 云端配置所对应的安卓包签名，当包名不为空时，必填。
     *
     * @var string
     */
    public $pkgSignature;
    protected $_name = [
        'bundleId'                => 'BundleId',
        'clientUploadBucket'      => 'ClientUploadBucket',
        'clientUploadPath'        => 'ClientUploadPath',
        'clientUploadStorageType' => 'ClientUploadStorageType',
        'pkgName'                 => 'PkgName',
        'pkgSignature'            => 'PkgSignature',
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
        if (null !== $this->clientUploadBucket) {
            $res['ClientUploadBucket'] = $this->clientUploadBucket;
        }
        if (null !== $this->clientUploadPath) {
            $res['ClientUploadPath'] = $this->clientUploadPath;
        }
        if (null !== $this->clientUploadStorageType) {
            $res['ClientUploadStorageType'] = $this->clientUploadStorageType;
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
     * @return SetClientConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['ClientUploadBucket'])) {
            $model->clientUploadBucket = $map['ClientUploadBucket'];
        }
        if (isset($map['ClientUploadPath'])) {
            $model->clientUploadPath = $map['ClientUploadPath'];
        }
        if (isset($map['ClientUploadStorageType'])) {
            $model->clientUploadStorageType = $map['ClientUploadStorageType'];
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
