<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\dnsConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\environmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\serviceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\vipConfigs;
use AlibabaCloud\Tea\Model;

class HttpApiPublishRevisionInfo extends Model
{
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
     * @var cloudProductConfig
     */
    public $cloudProductConfig;

    /**
     * @example 1718807057927
     *
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
     * @example env-xxx
     *
     * @var environmentInfo
     */
    public $environmentInfo;

    /**
     * @example true
     *
     * @var bool
     */
    public $isCurrentVersion;

    /**
     * @var HttpApiOperationInfo[]
     */
    public $operations;

    /**
     * @example apr-xxx
     *
     * @var string
     */
    public $revisionId;

    /**
     * @var serviceConfigs[]
     */
    public $serviceConfigs;

    /**
     * @example env-xxx.com
     *
     * @var HttpApiDomainInfo[]
     */
    public $subDomains;

    /**
     * @var vipConfigs[]
     */
    public $vipConfigs;
    protected $_name = [
        'backendScene'       => 'backendScene',
        'backendType'        => 'backendType',
        'cloudProductConfig' => 'cloudProductConfig',
        'createTimestamp'    => 'createTimestamp',
        'customDomains'      => 'customDomains',
        'dnsConfigs'         => 'dnsConfigs',
        'environmentInfo'    => 'environmentInfo',
        'isCurrentVersion'   => 'isCurrentVersion',
        'operations'         => 'operations',
        'revisionId'         => 'revisionId',
        'serviceConfigs'     => 'serviceConfigs',
        'subDomains'         => 'subDomains',
        'vipConfigs'         => 'vipConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendScene) {
            $res['backendScene'] = $this->backendScene;
        }
        if (null !== $this->backendType) {
            $res['backendType'] = $this->backendType;
        }
        if (null !== $this->cloudProductConfig) {
            $res['cloudProductConfig'] = null !== $this->cloudProductConfig ? $this->cloudProductConfig->toMap() : null;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
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
        if (null !== $this->dnsConfigs) {
            $res['dnsConfigs'] = [];
            if (null !== $this->dnsConfigs && \is_array($this->dnsConfigs)) {
                $n = 0;
                foreach ($this->dnsConfigs as $item) {
                    $res['dnsConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toMap() : null;
        }
        if (null !== $this->isCurrentVersion) {
            $res['isCurrentVersion'] = $this->isCurrentVersion;
        }
        if (null !== $this->operations) {
            $res['operations'] = [];
            if (null !== $this->operations && \is_array($this->operations)) {
                $n = 0;
                foreach ($this->operations as $item) {
                    $res['operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->revisionId) {
            $res['revisionId'] = $this->revisionId;
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
        if (null !== $this->vipConfigs) {
            $res['vipConfigs'] = [];
            if (null !== $this->vipConfigs && \is_array($this->vipConfigs)) {
                $n = 0;
                foreach ($this->vipConfigs as $item) {
                    $res['vipConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiPublishRevisionInfo
     */
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
                $n                    = 0;
                foreach ($map['customDomains'] as $item) {
                    $model->customDomains[$n++] = null !== $item ? HttpApiDomainInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dnsConfigs'])) {
            if (!empty($map['dnsConfigs'])) {
                $model->dnsConfigs = [];
                $n                 = 0;
                foreach ($map['dnsConfigs'] as $item) {
                    $model->dnsConfigs[$n++] = null !== $item ? dnsConfigs::fromMap($item) : $item;
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
                $n                 = 0;
                foreach ($map['operations'] as $item) {
                    $model->operations[$n++] = null !== $item ? HttpApiOperationInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['revisionId'])) {
            $model->revisionId = $map['revisionId'];
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
        if (isset($map['subDomains'])) {
            if (!empty($map['subDomains'])) {
                $model->subDomains = [];
                $n                 = 0;
                foreach ($map['subDomains'] as $item) {
                    $model->subDomains[$n++] = null !== $item ? HttpApiDomainInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vipConfigs'])) {
            if (!empty($map['vipConfigs'])) {
                $model->vipConfigs = [];
                $n                 = 0;
                foreach ($map['vipConfigs'] as $item) {
                    $model->vipConfigs[$n++] = null !== $item ? vipConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
