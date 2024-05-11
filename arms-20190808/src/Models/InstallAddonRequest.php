<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class InstallAddonRequest extends Model
{
    /**
     * @description The version of the add-on.
     *
     * This parameter is required.
     * @example 0.0.1
     *
     * @var string
     */
    public $addonVersion;

    /**
     * @description The language. Valid values: zh and en. Default value: zh.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The environment ID.
     *
     * This parameter is required.
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The name of the add-on.
     *
     * This parameter is required.
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
     * @description The name of the add-on after it is installed. If you do not specify this parameter, a default rule name is generated.
     *
     * @example mysql-xxxxx
     *
     * @var string
     */
    public $releaseName;

    /**
     * @description The metadata.
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
