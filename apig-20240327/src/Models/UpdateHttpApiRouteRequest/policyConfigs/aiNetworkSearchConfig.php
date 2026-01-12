<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiNetworkSearchConfig\pluginStatus;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiNetworkSearchConfig\searchEngineConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiNetworkSearchConfig\searchFrom;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiNetworkSearchConfig\searchRewrite;

class aiNetworkSearchConfig extends Model
{
    /**
     * @var bool
     */
    public $defaultEnable;

    /**
     * @var string
     */
    public $defaultLang;

    /**
     * @var bool
     */
    public $needReference;

    /**
     * @var pluginStatus
     */
    public $pluginStatus;

    /**
     * @var string
     */
    public $referenceFormat;

    /**
     * @var string
     */
    public $referenceLocation;

    /**
     * @var searchEngineConfig
     */
    public $searchEngineConfig;

    /**
     * @var searchFrom[]
     */
    public $searchFrom;

    /**
     * @var searchRewrite
     */
    public $searchRewrite;
    protected $_name = [
        'defaultEnable' => 'defaultEnable',
        'defaultLang' => 'defaultLang',
        'needReference' => 'needReference',
        'pluginStatus' => 'pluginStatus',
        'referenceFormat' => 'referenceFormat',
        'referenceLocation' => 'referenceLocation',
        'searchEngineConfig' => 'searchEngineConfig',
        'searchFrom' => 'searchFrom',
        'searchRewrite' => 'searchRewrite',
    ];

    public function validate()
    {
        if (null !== $this->pluginStatus) {
            $this->pluginStatus->validate();
        }
        if (null !== $this->searchEngineConfig) {
            $this->searchEngineConfig->validate();
        }
        if (\is_array($this->searchFrom)) {
            Model::validateArray($this->searchFrom);
        }
        if (null !== $this->searchRewrite) {
            $this->searchRewrite->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultEnable) {
            $res['defaultEnable'] = $this->defaultEnable;
        }

        if (null !== $this->defaultLang) {
            $res['defaultLang'] = $this->defaultLang;
        }

        if (null !== $this->needReference) {
            $res['needReference'] = $this->needReference;
        }

        if (null !== $this->pluginStatus) {
            $res['pluginStatus'] = null !== $this->pluginStatus ? $this->pluginStatus->toArray($noStream) : $this->pluginStatus;
        }

        if (null !== $this->referenceFormat) {
            $res['referenceFormat'] = $this->referenceFormat;
        }

        if (null !== $this->referenceLocation) {
            $res['referenceLocation'] = $this->referenceLocation;
        }

        if (null !== $this->searchEngineConfig) {
            $res['searchEngineConfig'] = null !== $this->searchEngineConfig ? $this->searchEngineConfig->toArray($noStream) : $this->searchEngineConfig;
        }

        if (null !== $this->searchFrom) {
            if (\is_array($this->searchFrom)) {
                $res['searchFrom'] = [];
                $n1 = 0;
                foreach ($this->searchFrom as $item1) {
                    $res['searchFrom'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchRewrite) {
            $res['searchRewrite'] = null !== $this->searchRewrite ? $this->searchRewrite->toArray($noStream) : $this->searchRewrite;
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
        if (isset($map['defaultEnable'])) {
            $model->defaultEnable = $map['defaultEnable'];
        }

        if (isset($map['defaultLang'])) {
            $model->defaultLang = $map['defaultLang'];
        }

        if (isset($map['needReference'])) {
            $model->needReference = $map['needReference'];
        }

        if (isset($map['pluginStatus'])) {
            $model->pluginStatus = pluginStatus::fromMap($map['pluginStatus']);
        }

        if (isset($map['referenceFormat'])) {
            $model->referenceFormat = $map['referenceFormat'];
        }

        if (isset($map['referenceLocation'])) {
            $model->referenceLocation = $map['referenceLocation'];
        }

        if (isset($map['searchEngineConfig'])) {
            $model->searchEngineConfig = searchEngineConfig::fromMap($map['searchEngineConfig']);
        }

        if (isset($map['searchFrom'])) {
            if (!empty($map['searchFrom'])) {
                $model->searchFrom = [];
                $n1 = 0;
                foreach ($map['searchFrom'] as $item1) {
                    $model->searchFrom[$n1] = searchFrom::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['searchRewrite'])) {
            $model->searchRewrite = searchRewrite::fromMap($map['searchRewrite']);
        }

        return $model;
    }
}
