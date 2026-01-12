<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiSecurityGuardConfig\consumerRequestCheckService;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiSecurityGuardConfig\consumerResponseCheckService;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiSecurityGuardConfig\consumerRiskLevel;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiSecurityGuardConfig\pluginStatus;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiSecurityGuardConfig\riskConfig;

class aiSecurityGuardConfig extends Model
{
    /**
     * @var int
     */
    public $bufferLimit;

    /**
     * @var bool
     */
    public $checkRequest;

    /**
     * @var bool
     */
    public $checkRequestImage;

    /**
     * @var bool
     */
    public $checkResponse;

    /**
     * @var bool
     */
    public $checkResponseImage;

    /**
     * @var consumerRequestCheckService[]
     */
    public $consumerRequestCheckService;

    /**
     * @var consumerResponseCheckService[]
     */
    public $consumerResponseCheckService;

    /**
     * @var consumerRiskLevel[]
     */
    public $consumerRiskLevel;

    /**
     * @var pluginStatus
     */
    public $pluginStatus;

    /**
     * @var string
     */
    public $requestCheckService;

    /**
     * @var string
     */
    public $requestImageCheckService;

    /**
     * @var string
     */
    public $responseCheckService;

    /**
     * @var string
     */
    public $responseImageCheckService;

    /**
     * @var string
     */
    public $riskAlertLevel;

    /**
     * @var riskConfig[]
     */
    public $riskConfig;

    /**
     * @var string
     */
    public $serviceAddress;
    protected $_name = [
        'bufferLimit' => 'bufferLimit',
        'checkRequest' => 'checkRequest',
        'checkRequestImage' => 'checkRequestImage',
        'checkResponse' => 'checkResponse',
        'checkResponseImage' => 'checkResponseImage',
        'consumerRequestCheckService' => 'consumerRequestCheckService',
        'consumerResponseCheckService' => 'consumerResponseCheckService',
        'consumerRiskLevel' => 'consumerRiskLevel',
        'pluginStatus' => 'pluginStatus',
        'requestCheckService' => 'requestCheckService',
        'requestImageCheckService' => 'requestImageCheckService',
        'responseCheckService' => 'responseCheckService',
        'responseImageCheckService' => 'responseImageCheckService',
        'riskAlertLevel' => 'riskAlertLevel',
        'riskConfig' => 'riskConfig',
        'serviceAddress' => 'serviceAddress',
    ];

    public function validate()
    {
        if (\is_array($this->consumerRequestCheckService)) {
            Model::validateArray($this->consumerRequestCheckService);
        }
        if (\is_array($this->consumerResponseCheckService)) {
            Model::validateArray($this->consumerResponseCheckService);
        }
        if (\is_array($this->consumerRiskLevel)) {
            Model::validateArray($this->consumerRiskLevel);
        }
        if (null !== $this->pluginStatus) {
            $this->pluginStatus->validate();
        }
        if (\is_array($this->riskConfig)) {
            Model::validateArray($this->riskConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bufferLimit) {
            $res['bufferLimit'] = $this->bufferLimit;
        }

        if (null !== $this->checkRequest) {
            $res['checkRequest'] = $this->checkRequest;
        }

        if (null !== $this->checkRequestImage) {
            $res['checkRequestImage'] = $this->checkRequestImage;
        }

        if (null !== $this->checkResponse) {
            $res['checkResponse'] = $this->checkResponse;
        }

        if (null !== $this->checkResponseImage) {
            $res['checkResponseImage'] = $this->checkResponseImage;
        }

        if (null !== $this->consumerRequestCheckService) {
            if (\is_array($this->consumerRequestCheckService)) {
                $res['consumerRequestCheckService'] = [];
                $n1 = 0;
                foreach ($this->consumerRequestCheckService as $item1) {
                    $res['consumerRequestCheckService'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->consumerResponseCheckService) {
            if (\is_array($this->consumerResponseCheckService)) {
                $res['consumerResponseCheckService'] = [];
                $n1 = 0;
                foreach ($this->consumerResponseCheckService as $item1) {
                    $res['consumerResponseCheckService'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->consumerRiskLevel) {
            if (\is_array($this->consumerRiskLevel)) {
                $res['consumerRiskLevel'] = [];
                $n1 = 0;
                foreach ($this->consumerRiskLevel as $item1) {
                    $res['consumerRiskLevel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pluginStatus) {
            $res['pluginStatus'] = null !== $this->pluginStatus ? $this->pluginStatus->toArray($noStream) : $this->pluginStatus;
        }

        if (null !== $this->requestCheckService) {
            $res['requestCheckService'] = $this->requestCheckService;
        }

        if (null !== $this->requestImageCheckService) {
            $res['requestImageCheckService'] = $this->requestImageCheckService;
        }

        if (null !== $this->responseCheckService) {
            $res['responseCheckService'] = $this->responseCheckService;
        }

        if (null !== $this->responseImageCheckService) {
            $res['responseImageCheckService'] = $this->responseImageCheckService;
        }

        if (null !== $this->riskAlertLevel) {
            $res['riskAlertLevel'] = $this->riskAlertLevel;
        }

        if (null !== $this->riskConfig) {
            if (\is_array($this->riskConfig)) {
                $res['riskConfig'] = [];
                $n1 = 0;
                foreach ($this->riskConfig as $item1) {
                    $res['riskConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceAddress) {
            $res['serviceAddress'] = $this->serviceAddress;
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
        if (isset($map['bufferLimit'])) {
            $model->bufferLimit = $map['bufferLimit'];
        }

        if (isset($map['checkRequest'])) {
            $model->checkRequest = $map['checkRequest'];
        }

        if (isset($map['checkRequestImage'])) {
            $model->checkRequestImage = $map['checkRequestImage'];
        }

        if (isset($map['checkResponse'])) {
            $model->checkResponse = $map['checkResponse'];
        }

        if (isset($map['checkResponseImage'])) {
            $model->checkResponseImage = $map['checkResponseImage'];
        }

        if (isset($map['consumerRequestCheckService'])) {
            if (!empty($map['consumerRequestCheckService'])) {
                $model->consumerRequestCheckService = [];
                $n1 = 0;
                foreach ($map['consumerRequestCheckService'] as $item1) {
                    $model->consumerRequestCheckService[$n1] = consumerRequestCheckService::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['consumerResponseCheckService'])) {
            if (!empty($map['consumerResponseCheckService'])) {
                $model->consumerResponseCheckService = [];
                $n1 = 0;
                foreach ($map['consumerResponseCheckService'] as $item1) {
                    $model->consumerResponseCheckService[$n1] = consumerResponseCheckService::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['consumerRiskLevel'])) {
            if (!empty($map['consumerRiskLevel'])) {
                $model->consumerRiskLevel = [];
                $n1 = 0;
                foreach ($map['consumerRiskLevel'] as $item1) {
                    $model->consumerRiskLevel[$n1] = consumerRiskLevel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pluginStatus'])) {
            $model->pluginStatus = pluginStatus::fromMap($map['pluginStatus']);
        }

        if (isset($map['requestCheckService'])) {
            $model->requestCheckService = $map['requestCheckService'];
        }

        if (isset($map['requestImageCheckService'])) {
            $model->requestImageCheckService = $map['requestImageCheckService'];
        }

        if (isset($map['responseCheckService'])) {
            $model->responseCheckService = $map['responseCheckService'];
        }

        if (isset($map['responseImageCheckService'])) {
            $model->responseImageCheckService = $map['responseImageCheckService'];
        }

        if (isset($map['riskAlertLevel'])) {
            $model->riskAlertLevel = $map['riskAlertLevel'];
        }

        if (isset($map['riskConfig'])) {
            if (!empty($map['riskConfig'])) {
                $model->riskConfig = [];
                $n1 = 0;
                foreach ($map['riskConfig'] as $item1) {
                    $model->riskConfig[$n1] = riskConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceAddress'])) {
            $model->serviceAddress = $map['serviceAddress'];
        }

        return $model;
    }
}
