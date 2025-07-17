<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddonMetricsRequest extends Model
{
    /**
     * @description The version of the component.
     *
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
     * @description The environment.
     *
     * @example CS
     *
     * @var string
     */
    public $environmentType;

    /**
     * @description The name of the component.
     *
     * This parameter is required.
     *
     * @example mysql
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'addonVersion' => 'AddonVersion',
        'aliyunLang' => 'AliyunLang',
        'environmentType' => 'EnvironmentType',
        'name' => 'Name',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeAddonMetricsRequest
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
