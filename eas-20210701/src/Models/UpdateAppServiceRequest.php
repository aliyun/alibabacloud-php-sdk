<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class UpdateAppServiceRequest extends Model
{
    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $serviceSpec;
    protected $_name = [
        'quotaId' => 'QuotaId',
        'workspaceId' => 'WorkspaceId',
        'appType' => 'AppType',
        'appVersion' => 'AppVersion',
        'config' => 'Config',
        'replicas' => 'Replicas',
        'serviceSpec' => 'ServiceSpec',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->config)) {
                $res['Config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['Config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->serviceSpec) {
            $res['ServiceSpec'] = $this->serviceSpec;
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
            if (!empty($map['Config'])) {
                $model->config = [];
                foreach ($map['Config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['ServiceSpec'])) {
            $model->serviceSpec = $map['ServiceSpec'];
        }

        return $model;
    }
}
