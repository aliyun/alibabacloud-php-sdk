<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class packageConfig extends Model
{
    /**
     * @description Pandora版本
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @description JDK版本
     *
     * @var string
     */
    public $jdk;

    /**
     * @description 部署包类型
     *
     * @var string
     */
    public $packageType;

    /**
     * @description 部署包地址
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description 部署包版本
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description 时区
     *
     * @var string
     */
    public $timezone;

    /**
     * @description URI字符编码
     *
     * @var string
     */
    public $uriEncoding;

    /**
     * @description useBodyEncodingForURI是否启用
     *
     * @var bool
     */
    public $useBodyEncoding;

    /**
     * @description Tomcat版本
     *
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'edasContainerVersion' => 'EdasContainerVersion',
        'jdk'                  => 'Jdk',
        'packageType'          => 'PackageType',
        'packageUrl'           => 'PackageUrl',
        'packageVersion'       => 'PackageVersion',
        'timezone'             => 'Timezone',
        'uriEncoding'          => 'UriEncoding',
        'useBodyEncoding'      => 'UseBodyEncoding',
        'webContainer'         => 'WebContainer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->jdk) {
            $res['Jdk'] = $this->jdk;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }
        if (null !== $this->uriEncoding) {
            $res['UriEncoding'] = $this->uriEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['Jdk'])) {
            $model->jdk = $map['Jdk'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }
        if (isset($map['UriEncoding'])) {
            $model->uriEncoding = $map['UriEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }

        return $model;
    }
}
