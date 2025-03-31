<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\dnsConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\environmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\serviceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\vipConfigs;

class HttpApiPublishRevisionInfo extends Model
{
    /**
     * @var string
     */
    public $backendScene;

    /**
     * @var string
     */
    public $backendType;

    /**
     * @var cloudProductConfig
     */
    public $cloudProductConfig;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var HttpApiDomainInfo[]
     */
    public $customDomains;

    /**
     * @var dnsConfigs[]
     */
    public $dnsConfigs;

    /**
     * @var environmentInfo
     */
    public $environmentInfo;

    /**
     * @var bool
     */
    public $isCurrentVersion;

    /**
     * @var HttpApiOperationInfo[]
     */
    public $operations;

    /**
     * @var string
     */
    public $revisionId;

    /**
     * @var serviceConfigs[]
     */
    public $serviceConfigs;

    /**
     * @var HttpApiDomainInfo[]
     */
    public $subDomains;

    /**
     * @var vipConfigs[]
     */
    public $vipConfigs;
    protected $_name = [
        'backendScene' => 'backendScene',
        'backendType' => 'backendType',
        'cloudProductConfig' => 'cloudProductConfig',
        'createTimestamp' => 'createTimestamp',
        'customDomains' => 'customDomains',
        'dnsConfigs' => 'dnsConfigs',
        'environmentInfo' => 'environmentInfo',
        'isCurrentVersion' => 'isCurrentVersion',
        'operations' => 'operations',
        'revisionId' => 'revisionId',
        'serviceConfigs' => 'serviceConfigs',
        'subDomains' => 'subDomains',
        'vipConfigs' => 'vipConfigs',
    ];

    public function validate()
    {
        if (null !== $this->cloudProductConfig) {
            $this->cloudProductConfig->validate();
        }
        if (\is_array($this->customDomains)) {
            Model::validateArray($this->customDomains);
        }
        if (\is_array($this->dnsConfigs)) {
            Model::validateArray($this->dnsConfigs);
        }
        if (null !== $this->environmentInfo) {
            $this->environmentInfo->validate();
        }
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        if (\is_array($this->serviceConfigs)) {
            Model::validateArray($this->serviceConfigs);
        }
        if (\is_array($this->subDomains)) {
            Model::validateArray($this->subDomains);
        }
        if (\is_array($this->vipConfigs)) {
            Model::validateArray($this->vipConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendScene) {
            $res['backendScene'] = $this->backendScene;
        }

        if (null !== $this->backendType) {
            $res['backendType'] = $this->backendType;
        }

        if (null !== $this->cloudProductConfig) {
            $res['cloudProductConfig'] = null !== $this->cloudProductConfig ? $this->cloudProductConfig->toArray($noStream) : $this->cloudProductConfig;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
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

        if (null !== $this->dnsConfigs) {
            if (\is_array($this->dnsConfigs)) {
                $res['dnsConfigs'] = [];
                $n1 = 0;
                foreach ($this->dnsConfigs as $item1) {
                    $res['dnsConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toArray($noStream) : $this->environmentInfo;
        }

        if (null !== $this->isCurrentVersion) {
            $res['isCurrentVersion'] = $this->isCurrentVersion;
        }

        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    $res['operations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->revisionId) {
            $res['revisionId'] = $this->revisionId;
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

        if (null !== $this->vipConfigs) {
            if (\is_array($this->vipConfigs)) {
                $res['vipConfigs'] = [];
                $n1 = 0;
                foreach ($this->vipConfigs as $item1) {
                    $res['vipConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['backendType'])) {
            $model->backendType = $map['backendType'];
        }

        if (isset($map['cloudProductConfig'])) {
            $model->cloudProductConfig = cloudProductConfig::fromMap($map['cloudProductConfig']);
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
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

        if (isset($map['dnsConfigs'])) {
            if (!empty($map['dnsConfigs'])) {
                $model->dnsConfigs = [];
                $n1 = 0;
                foreach ($map['dnsConfigs'] as $item1) {
                    $model->dnsConfigs[$n1++] = dnsConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['environmentInfo'])) {
            $model->environmentInfo = environmentInfo::fromMap($map['environmentInfo']);
        }

        if (isset($map['isCurrentVersion'])) {
            $model->isCurrentVersion = $map['isCurrentVersion'];
        }

        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n1 = 0;
                foreach ($map['operations'] as $item1) {
                    $model->operations[$n1++] = HttpApiOperationInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['revisionId'])) {
            $model->revisionId = $map['revisionId'];
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
                    $model->subDomains[$n1++] = HttpApiDomainInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['vipConfigs'])) {
            if (!empty($map['vipConfigs'])) {
                $model->vipConfigs = [];
                $n1 = 0;
                foreach ($map['vipConfigs'] as $item1) {
                    $model->vipConfigs[$n1++] = vipConfigs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
