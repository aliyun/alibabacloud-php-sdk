<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig\environment\serviceConfigs;

class environment extends Model
{
    /**
     * @var string
     */
    public $backendScene;

    /**
     * @var string[]
     */
    public $customDomainIds;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var serviceConfigs[]
     */
    public $serviceConfigs;
    protected $_name = [
        'backendScene' => 'backendScene',
        'customDomainIds' => 'customDomainIds',
        'environmentId' => 'environmentId',
        'serviceConfigs' => 'serviceConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->customDomainIds)) {
            Model::validateArray($this->customDomainIds);
        }
        if (\is_array($this->serviceConfigs)) {
            Model::validateArray($this->serviceConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendScene) {
            $res['backendScene'] = $this->backendScene;
        }

        if (null !== $this->customDomainIds) {
            if (\is_array($this->customDomainIds)) {
                $res['customDomainIds'] = [];
                $n1 = 0;
                foreach ($this->customDomainIds as $item1) {
                    $res['customDomainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->serviceConfigs) {
            if (\is_array($this->serviceConfigs)) {
                $res['serviceConfigs'] = [];
                $n1 = 0;
                foreach ($this->serviceConfigs as $item1) {
                    $res['serviceConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['backendScene'])) {
            $model->backendScene = $map['backendScene'];
        }

        if (isset($map['customDomainIds'])) {
            if (!empty($map['customDomainIds'])) {
                $model->customDomainIds = [];
                $n1 = 0;
                foreach ($map['customDomainIds'] as $item1) {
                    $model->customDomainIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['serviceConfigs'])) {
            if (!empty($map['serviceConfigs'])) {
                $model->serviceConfigs = [];
                $n1 = 0;
                foreach ($map['serviceConfigs'] as $item1) {
                    $model->serviceConfigs[$n1] = serviceConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
