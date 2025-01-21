<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DescribeAddonMetricsRequest extends Model
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
     * @var string
     */
    public $environmentType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'addonVersion'    => 'AddonVersion',
        'aliyunLang'      => 'AliyunLang',
        'environmentType' => 'EnvironmentType',
        'name'            => 'Name',
        'regionId'        => 'RegionId',
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

        if (null !== $this->environmentType) {
            $res['EnvironmentType'] = $this->environmentType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['EnvironmentType'])) {
            $model->environmentType = $map['EnvironmentType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
