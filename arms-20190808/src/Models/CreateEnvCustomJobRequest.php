<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateEnvCustomJobRequest extends Model
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
     * @description The YAML configuration string of the custom job.
     *
     * This parameter is required.
     * @example Refer to supplementary instructions.
     *
     * @var string
     */
    public $configYaml;

    /**
     * @description The name of the custom job.
     *
     * This parameter is required.
     * @example customJob1
     *
     * @var string
     */
    public $customJobName;

    /**
     * @description The ID of the environment instance.
     *
     * This parameter is required.
     * @example env-xxxxxx
     *
     * @var string
     */
    public $environmentId;

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
        'aliyunLang'    => 'AliyunLang',
        'configYaml'    => 'ConfigYaml',
        'customJobName' => 'CustomJobName',
        'environmentId' => 'EnvironmentId',
        'regionId'      => 'RegionId',
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
        if (null !== $this->configYaml) {
            $res['ConfigYaml'] = $this->configYaml;
        }
        if (null !== $this->customJobName) {
            $res['CustomJobName'] = $this->customJobName;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnvCustomJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['ConfigYaml'])) {
            $model->configYaml = $map['ConfigYaml'];
        }
        if (isset($map['CustomJobName'])) {
            $model->customJobName = $map['CustomJobName'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
