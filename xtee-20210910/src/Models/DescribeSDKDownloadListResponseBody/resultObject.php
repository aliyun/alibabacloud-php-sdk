<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSDKDownloadListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $developer;

    /**
     * @var string
     */
    public $deviceType;

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
    public $packageName;

    /**
     * @var string
     */
    public $privacyLink;

    /**
     * @var string
     */
    public $pushTime;

    /**
     * @var string
     */
    public $sdkVersion;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'description' => 'description',
        'developer'   => 'developer',
        'deviceType'  => 'deviceType',
        'downloadUrl' => 'downloadUrl',
        'md5'         => 'md5',
        'packageName' => 'packageName',
        'privacyLink' => 'privacyLink',
        'pushTime'    => 'pushTime',
        'sdkVersion'  => 'sdkVersion',
        'size'        => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->developer) {
            $res['developer'] = $this->developer;
        }
        if (null !== $this->deviceType) {
            $res['deviceType'] = $this->deviceType;
        }
        if (null !== $this->downloadUrl) {
            $res['downloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->md5) {
            $res['md5'] = $this->md5;
        }
        if (null !== $this->packageName) {
            $res['packageName'] = $this->packageName;
        }
        if (null !== $this->privacyLink) {
            $res['privacyLink'] = $this->privacyLink;
        }
        if (null !== $this->pushTime) {
            $res['pushTime'] = $this->pushTime;
        }
        if (null !== $this->sdkVersion) {
            $res['sdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['developer'])) {
            $model->developer = $map['developer'];
        }
        if (isset($map['deviceType'])) {
            $model->deviceType = $map['deviceType'];
        }
        if (isset($map['downloadUrl'])) {
            $model->downloadUrl = $map['downloadUrl'];
        }
        if (isset($map['md5'])) {
            $model->md5 = $map['md5'];
        }
        if (isset($map['packageName'])) {
            $model->packageName = $map['packageName'];
        }
        if (isset($map['privacyLink'])) {
            $model->privacyLink = $map['privacyLink'];
        }
        if (isset($map['pushTime'])) {
            $model->pushTime = $map['pushTime'];
        }
        if (isset($map['sdkVersion'])) {
            $model->sdkVersion = $map['sdkVersion'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
