<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class InstallAddonRequest extends Model
{
    /**
     * @var string
     */
    public $addonVersion;
    /**
     * @var string
     */
    public $aliyunLang;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $releaseName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
