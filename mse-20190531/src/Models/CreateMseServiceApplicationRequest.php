<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateMseServiceApplicationRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese.
     *   en: English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The name of the application.
     *
     * @example bsd-xxyp-open-goods-server
     *
     * @var string
     */
    public $appName;

    /**
     * @description The additional information.
     *
     * @example {}
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The programming language of the application.
     *
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @description The edition of the MSE instance that you want to purchase.
     *
     *   mse_pro: Professional Edition.
     *   mse_dev: Developer Edition.
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @description The ID of the region where the instance resides. Examples:
     *
     *   cn-hangzhou: China (Hangzhou)
     *   cn-beijing: China (Beijing)
     *   cn-shanghai: China (Shanghai)
     *   cn-zhangjiakou: China (Zhangjiakou)
     *   cn-shenzhen: China (Shenzhen)
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @description Specifies whether to enable the Sentinel-compatible mode.
     *
     * @example true
     *
     * @var string
     */
    public $sentinelEnable;

    /**
     * @description The source.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @description Specifies whether to enable switching.
     *
     * @example true
     *
     * @var string
     */
    public $switchEnable;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName'        => 'AppName',
        'extraInfo'      => 'ExtraInfo',
        'language'       => 'Language',
        'mseVersion'     => 'MseVersion',
        'region'         => 'Region',
        'sentinelEnable' => 'SentinelEnable',
        'source'         => 'Source',
        'switchEnable'   => 'SwitchEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sentinelEnable) {
            $res['SentinelEnable'] = $this->sentinelEnable;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->switchEnable) {
            $res['SwitchEnable'] = $this->switchEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMseServiceApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SentinelEnable'])) {
            $model->sentinelEnable = $map['SentinelEnable'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SwitchEnable'])) {
            $model->switchEnable = $map['SwitchEnable'];
        }

        return $model;
    }
}
