<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\cloudProductConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\dnsConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\serviceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\vipConfigs;
use AlibabaCloud\Tea\Model;

class environments extends Model
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
     * @var dnsConfigs[]
     */
    public $dnsConfigs;

    /**
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @var serviceConfigs[]
     */
    public $serviceConfigs;

    /**
     * @var vipConfigs[]
     */
    public $vipConfigs;
    protected $_name = [
        'backendScene'       => 'backendScene',
        'backendType'        => 'backendType',
        'cloudProductConfig' => 'cloudProductConfig',
        'dnsConfigs'         => 'dnsConfigs',
        'environmentId'      => 'environmentId',
        'serviceConfigs'     => 'serviceConfigs',
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
        if (null !== $this->dnsConfigs) {
            $res['dnsConfigs'] = [];
            if (null !== $this->dnsConfigs && \is_array($this->dnsConfigs)) {
                $n = 0;
                foreach ($this->dnsConfigs as $item) {
                    $res['dnsConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return environments
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
        if (isset($map['dnsConfigs'])) {
            if (!empty($map['dnsConfigs'])) {
                $model->dnsConfigs = [];
                $n                 = 0;
                foreach ($map['dnsConfigs'] as $item) {
                    $model->dnsConfigs[$n++] = null !== $item ? dnsConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
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
