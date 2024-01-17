<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\consoleConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\searchSources;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\userInfo;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\wanxiangImageSizeConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\wanxiangImageStyleConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $chatConfig;

    /**
     * @var consoleConfig
     */
    public $consoleConfig;

    /**
     * @var mixed[]
     */
    public $generalConfigMap;

    /**
     * @var intelligentSearchConfig
     */
    public $intelligentSearchConfig;

    /**
     * @var searchSources[]
     */
    public $searchSources;

    /**
     * @example true
     *
     * @var bool
     */
    public $slrAuthorized;

    /**
     * @var userInfo
     */
    public $userInfo;

    /**
     * @var wanxiangImageSizeConfig[]
     */
    public $wanxiangImageSizeConfig;

    /**
     * @var wanxiangImageStyleConfig[]
     */
    public $wanxiangImageStyleConfig;
    protected $_name = [
        'chatConfig'               => 'ChatConfig',
        'consoleConfig'            => 'ConsoleConfig',
        'generalConfigMap'         => 'GeneralConfigMap',
        'intelligentSearchConfig'  => 'IntelligentSearchConfig',
        'searchSources'            => 'SearchSources',
        'slrAuthorized'            => 'SlrAuthorized',
        'userInfo'                 => 'UserInfo',
        'wanxiangImageSizeConfig'  => 'WanxiangImageSizeConfig',
        'wanxiangImageStyleConfig' => 'WanxiangImageStyleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatConfig) {
            $res['ChatConfig'] = $this->chatConfig;
        }
        if (null !== $this->consoleConfig) {
            $res['ConsoleConfig'] = null !== $this->consoleConfig ? $this->consoleConfig->toMap() : null;
        }
        if (null !== $this->generalConfigMap) {
            $res['GeneralConfigMap'] = $this->generalConfigMap;
        }
        if (null !== $this->intelligentSearchConfig) {
            $res['IntelligentSearchConfig'] = null !== $this->intelligentSearchConfig ? $this->intelligentSearchConfig->toMap() : null;
        }
        if (null !== $this->searchSources) {
            $res['SearchSources'] = [];
            if (null !== $this->searchSources && \is_array($this->searchSources)) {
                $n = 0;
                foreach ($this->searchSources as $item) {
                    $res['SearchSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->slrAuthorized) {
            $res['SlrAuthorized'] = $this->slrAuthorized;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }
        if (null !== $this->wanxiangImageSizeConfig) {
            $res['WanxiangImageSizeConfig'] = [];
            if (null !== $this->wanxiangImageSizeConfig && \is_array($this->wanxiangImageSizeConfig)) {
                $n = 0;
                foreach ($this->wanxiangImageSizeConfig as $item) {
                    $res['WanxiangImageSizeConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wanxiangImageStyleConfig) {
            $res['WanxiangImageStyleConfig'] = [];
            if (null !== $this->wanxiangImageStyleConfig && \is_array($this->wanxiangImageStyleConfig)) {
                $n = 0;
                foreach ($this->wanxiangImageStyleConfig as $item) {
                    $res['WanxiangImageStyleConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatConfig'])) {
            $model->chatConfig = $map['ChatConfig'];
        }
        if (isset($map['ConsoleConfig'])) {
            $model->consoleConfig = consoleConfig::fromMap($map['ConsoleConfig']);
        }
        if (isset($map['GeneralConfigMap'])) {
            $model->generalConfigMap = $map['GeneralConfigMap'];
        }
        if (isset($map['IntelligentSearchConfig'])) {
            $model->intelligentSearchConfig = intelligentSearchConfig::fromMap($map['IntelligentSearchConfig']);
        }
        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n                    = 0;
                foreach ($map['SearchSources'] as $item) {
                    $model->searchSources[$n++] = null !== $item ? searchSources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SlrAuthorized'])) {
            $model->slrAuthorized = $map['SlrAuthorized'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }
        if (isset($map['WanxiangImageSizeConfig'])) {
            if (!empty($map['WanxiangImageSizeConfig'])) {
                $model->wanxiangImageSizeConfig = [];
                $n                              = 0;
                foreach ($map['WanxiangImageSizeConfig'] as $item) {
                    $model->wanxiangImageSizeConfig[$n++] = null !== $item ? wanxiangImageSizeConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WanxiangImageStyleConfig'])) {
            if (!empty($map['WanxiangImageStyleConfig'])) {
                $model->wanxiangImageStyleConfig = [];
                $n                               = 0;
                foreach ($map['WanxiangImageStyleConfig'] as $item) {
                    $model->wanxiangImageStyleConfig[$n++] = null !== $item ? wanxiangImageStyleConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
