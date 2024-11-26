<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\serviceConfigs;
use AlibabaCloud\Tea\Model;

class HttpApiDeployConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoDeploy;

    /**
     * @example SingleService
     *
     * @var string
     */
    public $backendScene;

    /**
     * @var string[]
     */
    public $customDomainIds;

    /**
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @var policyConfigs[]
     */
    public $policyConfigs;

    /**
     * @var serviceConfigs[]
     */
    public $serviceConfigs;
    protected $_name = [
        'autoDeploy'      => 'autoDeploy',
        'backendScene'    => 'backendScene',
        'customDomainIds' => 'customDomainIds',
        'environmentId'   => 'environmentId',
        'policyConfigs'   => 'policyConfigs',
        'serviceConfigs'  => 'serviceConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeploy) {
            $res['autoDeploy'] = $this->autoDeploy;
        }
        if (null !== $this->backendScene) {
            $res['backendScene'] = $this->backendScene;
        }
        if (null !== $this->customDomainIds) {
            $res['customDomainIds'] = $this->customDomainIds;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->policyConfigs) {
            $res['policyConfigs'] = [];
            if (null !== $this->policyConfigs && \is_array($this->policyConfigs)) {
                $n = 0;
                foreach ($this->policyConfigs as $item) {
                    $res['policyConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceConfigs) {
            $res['serviceConfigs'] = [];
            if (null !== $this->serviceConfigs && \is_array($this->serviceConfigs)) {
                $n = 0;
                foreach ($this->serviceConfigs as $item) {
                    $res['serviceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiDeployConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoDeploy'])) {
            $model->autoDeploy = $map['autoDeploy'];
        }
        if (isset($map['backendScene'])) {
            $model->backendScene = $map['backendScene'];
        }
        if (isset($map['customDomainIds'])) {
            if (!empty($map['customDomainIds'])) {
                $model->customDomainIds = $map['customDomainIds'];
            }
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['policyConfigs'])) {
            if (!empty($map['policyConfigs'])) {
                $model->policyConfigs = [];
                $n                    = 0;
                foreach ($map['policyConfigs'] as $item) {
                    $model->policyConfigs[$n++] = null !== $item ? policyConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['serviceConfigs'])) {
            if (!empty($map['serviceConfigs'])) {
                $model->serviceConfigs = [];
                $n                     = 0;
                foreach ($map['serviceConfigs'] as $item) {
                    $model->serviceConfigs[$n++] = null !== $item ? serviceConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
