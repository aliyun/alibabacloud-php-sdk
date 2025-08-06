<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetPlayConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $OS;

    /**
     * @var string
     */
    public $OSVersion;

    /**
     * @var string
     */
    public $SDKVersion;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'brand' => 'Brand',
        'configType' => 'ConfigType',
        'OS' => 'OS',
        'OSVersion' => 'OSVersion',
        'SDKVersion' => 'SDKVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->OS) {
            $res['OS'] = $this->OS;
        }

        if (null !== $this->OSVersion) {
            $res['OSVersion'] = $this->OSVersion;
        }

        if (null !== $this->SDKVersion) {
            $res['SDKVersion'] = $this->SDKVersion;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['OS'])) {
            $model->OS = $map['OS'];
        }

        if (isset($map['OSVersion'])) {
            $model->OSVersion = $map['OSVersion'];
        }

        if (isset($map['SDKVersion'])) {
            $model->SDKVersion = $map['SDKVersion'];
        }

        return $model;
    }
}
