<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateAppServiceRequest extends Model
{
    /**
     * @description The quota ID.
     *
     * @example abcdef
     *
     * @var string
     */
    public $quotaId;

    /**
     * @description The workspace ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The application service type.
     *
     * Valid values:
     *
     *   LLM
     *
     * <!-- -->
     * @example LLM
     *
     * @var string
     */
    public $appType;

    /**
     * @description The application version.
     *
     * @example v1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description Additional configurations that are required for the service deployment.
     *
     * @var mixed[]
     */
    public $config;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The service name.
     *
     * @example foo
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The service specifications.
     *
     * @example llama_7b_fp16
     *
     * @var string
     */
    public $serviceSpec;
    protected $_name = [
        'quotaId'     => 'QuotaId',
        'workspaceId' => 'WorkspaceId',
        'appType'     => 'AppType',
        'appVersion'  => 'AppVersion',
        'config'      => 'Config',
        'replicas'    => 'Replicas',
        'serviceName' => 'ServiceName',
        'serviceSpec' => 'ServiceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceSpec) {
            $res['ServiceSpec'] = $this->serviceSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceSpec'])) {
            $model->serviceSpec = $map['ServiceSpec'];
        }

        return $model;
    }
}
