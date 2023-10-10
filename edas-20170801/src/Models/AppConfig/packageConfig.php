<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class packageConfig extends Model
{
    /**
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var string
     */
    public $jdk;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $uriEncoding;

    /**
     * @var bool
     */
    public $useBodyEncoding;

    /**
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
