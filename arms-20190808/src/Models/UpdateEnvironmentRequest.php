<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnvironmentRequest extends Model
{
    /**
     * @description The language. Valid values: zh and en. Default value: zh.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description The environment ID.
     *
     * This parameter is required.
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The environment name.
     *
     * @example env1
     *
     * @var string
     */
    public $environmentName;

    /**
     * @description Fee package.
     * When the EnvironmentType is CS: it can be specified as CS_Basic (default) or CS-Pro.
     * When the EnvironmentType is a different value, please enter a null value.
     *
     * @example CS_Basic
     *
     * @var string
     */
    public $feePackage;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang'      => 'AliyunLang',
        'environmentId'   => 'EnvironmentId',
        'environmentName' => 'EnvironmentName',
        'feePackage'      => 'FeePackage',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->environmentName) {
            $res['EnvironmentName'] = $this->environmentName;
        }
        if (null !== $this->feePackage) {
            $res['FeePackage'] = $this->feePackage;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['EnvironmentName'])) {
            $model->environmentName = $map['EnvironmentName'];
        }
        if (isset($map['FeePackage'])) {
            $model->feePackage = $map['FeePackage'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
