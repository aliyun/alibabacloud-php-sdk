<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnvDropMetricsRuleRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description This parameter is required.
     *
     * @example metric_1
     * metric_2
     * metric_3
     *
     * @var string
     */
    public $dropMetrics;

    /**
     * @description This parameter is required.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang' => 'AliyunLang',
        'dropMetrics' => 'DropMetrics',
        'environmentId' => 'EnvironmentId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }
        if (null !== $this->dropMetrics) {
            $res['DropMetrics'] = $this->dropMetrics;
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
     * @return UpdateEnvDropMetricsRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['DropMetrics'])) {
            $model->dropMetrics = $map['DropMetrics'];
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
