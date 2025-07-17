<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig;

use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig\environment\serviceConfigs;
use AlibabaCloud\Tea\Model;

class environment extends Model
{
    /**
     * @description API publication scenario.
     *
     * @example SingleService
     *
     * @var string
     */
    public $backendScene;

    /**
     * @description List of user domains.
     *
     * @var string[]
     */
    public $customDomainIds;

    /**
     * @description Environment ID.
     *
     * @example env-cpqnr6tlhtgubc***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Existing service configurations. Only one entry is allowed in a single-service scenario, while multiple entries are allowed in scenarios such as by ratio or by content.
     *
     * @var serviceConfigs[]
     */
    public $serviceConfigs;
    protected $_name = [
        'backendScene' => 'backendScene',
        'customDomainIds' => 'customDomainIds',
        'environmentId' => 'environmentId',
        'serviceConfigs' => 'serviceConfigs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendScene) {
            $res['backendScene'] = $this->backendScene;
        }
        if (null !== $this->customDomainIds) {
            $res['customDomainIds'] = $this->customDomainIds;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
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
     * @return environment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['serviceConfigs'])) {
            if (!empty($map['serviceConfigs'])) {
                $model->serviceConfigs = [];
                $n = 0;
                foreach ($map['serviceConfigs'] as $item) {
                    $model->serviceConfigs[$n++] = null !== $item ? serviceConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
