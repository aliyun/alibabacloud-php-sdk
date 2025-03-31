<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\gatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\serviceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\subDomains;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDomainInfo;

class environments extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $backendScene;

    /**
     * @var string
     */
    public $backendType;

    /**
     * @var HttpApiDomainInfo[]
     */
    public $customDomains;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var gatewayInfo
     */
    public $gatewayInfo;

    /**
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

    public function validate()
    {
        if (\is_array($this->customDomains)) {
            Model::validateArray($this->customDomains);
        }
        if (null !== $this->gatewayInfo) {
            $this->gatewayInfo->validate();
        }
        if (\is_array($this->serviceConfigs)) {
            Model::validateArray($this->serviceConfigs);
        }
        if (\is_array($this->subDomains)) {
            Model::validateArray($this->subDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->customDomains)) {
                $res['customDomains'] = [];
                $n1 = 0;
                foreach ($this->customDomains as $item1) {
                    $res['customDomains'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toArray($noStream) : $this->gatewayInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->serviceConfigs) {
            if (\is_array($this->serviceConfigs)) {
                $res['serviceConfigs'] = [];
                $n1 = 0;
                foreach ($this->serviceConfigs as $item1) {
                    $res['serviceConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subDomains) {
            if (\is_array($this->subDomains)) {
                $res['subDomains'] = [];
                $n1 = 0;
                foreach ($this->subDomains as $item1) {
                    $res['subDomains'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['customDomains'] as $item1) {
                    $model->customDomains[$n1++] = HttpApiDomainInfo::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['serviceConfigs'] as $item1) {
                    $model->serviceConfigs[$n1++] = serviceConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['subDomains'])) {
            if (!empty($map['subDomains'])) {
                $model->subDomains = [];
                $n1 = 0;
                foreach ($map['subDomains'] as $item1) {
                    $model->subDomains[$n1++] = subDomains::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
