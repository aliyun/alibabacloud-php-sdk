<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnvCustomJobRequest extends Model
{
    /**
     * @description Locale, the default is Chinese zh | en.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description yaml configuration string.
     *
     * @example `
     * `
     * @var string
     */
    public $configYaml;

    /**
     * @description Custom job name.
     *
     * @example customJob1
     *
     * @var string
     */
    public $customJobName;

    /**
     * @description Environment ID.
     *
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Custom task status: run or stop.
     *
     * @example run
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunLang'    => 'AliyunLang',
        'configYaml'    => 'ConfigYaml',
        'customJobName' => 'CustomJobName',
        'environmentId' => 'EnvironmentId',
        'regionId'      => 'RegionId',
        'status'        => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnvCustomJobRequest
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
