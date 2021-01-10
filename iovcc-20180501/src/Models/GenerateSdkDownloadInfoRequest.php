<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GenerateSdkDownloadInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sdks;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $osType;

    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $certFileObjectKey;
    protected $_name = [
        'sdks'              => 'Sdks',
        'appId'             => 'AppId',
        'osType'            => 'OsType',
        'pkgName'           => 'PkgName',
        'projectId'         => 'ProjectId',
        'certFileObjectKey' => 'CertFileObjectKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sdks) {
            $res['Sdks'] = $this->sdks;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->certFileObjectKey) {
            $res['CertFileObjectKey'] = $this->certFileObjectKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateSdkDownloadInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sdks'])) {
            $model->sdks = $map['Sdks'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['CertFileObjectKey'])) {
            $model->certFileObjectKey = $map['CertFileObjectKey'];
        }

        return $model;
    }
}
