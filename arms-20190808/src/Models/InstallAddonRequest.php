<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class InstallAddonRequest extends Model
{
    /**
     * @description Version of Addon.
     *
     * @example 0.0.1
     *
     * @var string
     */
    public $addonVersion;

    /**
     * @description Locale, the default is Chinese zh.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description Whether to test run. The default value is false.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Environment ID.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Name of Addon.
     *
     * @example mysql
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The release name after installation, if not specified, generates the default rule name.
     *
     * @example mysql-xxxxx
     *
     * @var string
     */
    public $releaseName;

    /**
     * @description Config information.
     *
     * @example {"host":"mysql-service.default","port":3306,"username":"root","password":"roots"}
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'addonVersion'  => 'AddonVersion',
        'aliyunLang'    => 'AliyunLang',
        'dryRun'        => 'DryRun',
        'environmentId' => 'EnvironmentId',
        'name'          => 'Name',
        'regionId'      => 'RegionId',
        'releaseName'   => 'ReleaseName',
        'values'        => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonVersion) {
            $res['AddonVersion'] = $this->addonVersion;
        }
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseName) {
            $res['ReleaseName'] = $this->releaseName;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallAddonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddonVersion'])) {
            $model->addonVersion = $map['AddonVersion'];
        }
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseName'])) {
            $model->releaseName = $map['ReleaseName'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
