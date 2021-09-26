<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ApplyHealthCheckTemplateToServerGroupRequest extends Model
{
    /**
     * @description 健康检查模板Id
     *
     * @var string
     */
    public $healthCheckTemplateId;

    /**
     * @description 服务器组Id
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description 幂等Token
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
    protected $_name = [
        'healthCheckTemplateId' => 'HealthCheckTemplateId',
        'serverGroupId'         => 'ServerGroupId',
        'clientToken'           => 'ClientToken',
        'dryRun'                => 'DryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckTemplateId) {
            $res['HealthCheckTemplateId'] = $this->healthCheckTemplateId;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyHealthCheckTemplateToServerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckTemplateId'])) {
            $model->healthCheckTemplateId = $map['HealthCheckTemplateId'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        return $model;
    }
}
