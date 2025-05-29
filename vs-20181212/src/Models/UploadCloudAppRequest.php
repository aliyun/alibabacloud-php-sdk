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
    protected $_name = [
        'appName' => 'AppName',
        'appVersion' => 'AppVersion',
        'description' => 'Description',
        'downloadUrl' => 'DownloadUrl',
        'md5' => 'Md5',
    ];

    public function validate()
    {
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

        return $model;
    }
}
