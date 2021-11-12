<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class DeleteHealthCheckTemplatesRequest extends Model
{
    /**
     * @description 幂等token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 健康检查模板Id列表
     *
     * @var string[]
     */
    public $healthCheckTemplateIds;
    protected $_name = [
        'clientToken'            => 'ClientToken',
        'dryRun'                 => 'DryRun',
        'healthCheckTemplateIds' => 'HealthCheckTemplateIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->healthCheckTemplateIds) {
            $res['HealthCheckTemplateIds'] = $this->healthCheckTemplateIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHealthCheckTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['HealthCheckTemplateIds'])) {
            if (!empty($map['HealthCheckTemplateIds'])) {
                $model->healthCheckTemplateIds = $map['HealthCheckTemplateIds'];
            }
        }

        return $model;
    }
}
