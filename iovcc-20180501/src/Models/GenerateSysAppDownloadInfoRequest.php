<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GenerateSysAppDownloadInfoRequest extends Model
{
    /**
     * @var string
     */
    public $plugins;

    /**
     * @var string
     */
    public $signMode;

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
        'plugins'           => 'Plugins',
        'signMode'          => 'SignMode',
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
        if (null !== $this->plugins) {
            $res['Plugins'] = $this->plugins;
        }
        if (null !== $this->signMode) {
            $res['SignMode'] = $this->signMode;
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
     * @return GenerateSysAppDownloadInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Plugins'])) {
            $model->plugins = $map['Plugins'];
        }
        if (isset($map['SignMode'])) {
            $model->signMode = $map['SignMode'];
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
