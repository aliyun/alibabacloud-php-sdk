<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UploadCloudAppRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example com.aaa.bbb
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example 1.1.1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example https://xxx.xxx.xxx.apk
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description This parameter is required.
     *
     * @example 0CFBB7BD10CDD7279642ADAB8FEF3DEE
     *
     * @var string
     */
    public $md5;
    protected $_name = [
        'appName'     => 'AppName',
        'appVersion'  => 'AppVersion',
        'description' => 'Description',
        'downloadUrl' => 'DownloadUrl',
        'md5'         => 'Md5',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCloudAppRequest
     */
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

        return $model;
    }
}
