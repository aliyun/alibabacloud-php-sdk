<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\gatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\serviceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\subDomains;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDomainInfo;
use AlibabaCloud\Tea\Model;

class environments extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $alias;

    /**
     * @example SingleService
     *
     * @var string
     */
    public $backendScene;

    /**
     * @example Service
     *
     * @var string
     */
    public $backendType;

    /**
     * @var HttpApiDomainInfo[]
     */
    public $customDomains;

    /**
     * @example Deployed
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @var gatewayInfo
     */
    public $gatewayInfo;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var serviceConfigs[]
     */
    public $serviceConfigs;

    /**
     * @var subDomains[]
     */
    public $subDomains;
    protected $_name = [
        'alias' => 'alias',
        'backendScene' => 'backendScene',
        'backendType' => 'backendType',
        'customDomains' => 'customDomains',
        'deployStatus' => 'deployStatus',
        'environmentId' => 'environmentId',
        'gatewayInfo' => 'gatewayInfo',
        'name' => 'name',
        'serviceConfigs' => 'serviceConfigs',
        'subDomains' => 'subDomains',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->backendScene) {
            $res['backendScene'] = $this->backendScene;
        }
        if (null !== $this->backendType) {
            $res['backendType'] = $this->backendType;
        }
        if (null !== $this->customDomains) {
            $res['customDomains'] = [];
            if (null !== $this->customDomains && \is_array($this->customDomains)) {
                $n = 0;
                foreach ($this->customDomains as $item) {
                    $res['customDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (null !== $this->subDomains) {
            $res['subDomains'] = [];
            if (null !== $this->subDomains && \is_array($this->subDomains)) {
                $n = 0;
                foreach ($this->subDomains as $item) {
                    $res['subDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['backendScene'])) {
            $model->backendScene = $map['backendScene'];
        }
        if (isset($map['backendType'])) {
            $model->backendType = $map['backendType'];
        }
        if (isset($map['customDomains'])) {
            if (!empty($map['customDomains'])) {
                $model->customDomains = [];
                $n = 0;
                foreach ($map['customDomains'] as $item) {
                    $model->customDomains[$n++] = null !== $item ? HttpApiDomainInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['gatewayInfo'])) {
            $model->gatewayInfo = gatewayInfo::fromMap($map['gatewayInfo']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
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
        if (isset($map['subDomains'])) {
            if (!empty($map['subDomains'])) {
                $model->subDomains = [];
                $n = 0;
                foreach ($map['subDomains'] as $item) {
                    $model->subDomains[$n++] = null !== $item ? subDomains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
