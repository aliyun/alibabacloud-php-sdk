<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\consoleConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\miaosouConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\searchSourceList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\searchSources;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\userInfo;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\wanxiangImageSizeConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\wanxiangImageStyleConfig;

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
     * @var miaosouConfig
     */
    public $miaosouConfig;

    /**
     * @var searchSourceList[]
     */
    public $searchSourceList;

    /**
     * @var searchSources[]
     */
    public $searchSources;

    /**
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
        'chatConfig' => 'ChatConfig',
        'consoleConfig' => 'ConsoleConfig',
        'generalConfigMap' => 'GeneralConfigMap',
        'intelligentSearchConfig' => 'IntelligentSearchConfig',
        'miaosouConfig' => 'MiaosouConfig',
        'searchSourceList' => 'SearchSourceList',
        'searchSources' => 'SearchSources',
        'slrAuthorized' => 'SlrAuthorized',
        'userInfo' => 'UserInfo',
        'wanxiangImageSizeConfig' => 'WanxiangImageSizeConfig',
        'wanxiangImageStyleConfig' => 'WanxiangImageStyleConfig',
    ];

    public function validate()
    {
        if (\is_array($this->chatConfig)) {
            Model::validateArray($this->chatConfig);
        }
        if (null !== $this->consoleConfig) {
            $this->consoleConfig->validate();
        }
        if (\is_array($this->generalConfigMap)) {
            Model::validateArray($this->generalConfigMap);
        }
        if (null !== $this->intelligentSearchConfig) {
            $this->intelligentSearchConfig->validate();
        }
        if (null !== $this->miaosouConfig) {
            $this->miaosouConfig->validate();
        }
        if (\is_array($this->searchSourceList)) {
            Model::validateArray($this->searchSourceList);
        }
        if (\is_array($this->searchSources)) {
            Model::validateArray($this->searchSources);
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        if (\is_array($this->wanxiangImageSizeConfig)) {
            Model::validateArray($this->wanxiangImageSizeConfig);
        }
        if (\is_array($this->wanxiangImageStyleConfig)) {
            Model::validateArray($this->wanxiangImageStyleConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatConfig) {
            if (\is_array($this->chatConfig)) {
                $res['ChatConfig'] = [];
                foreach ($this->chatConfig as $key1 => $value1) {
                    $res['ChatConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->consoleConfig) {
            $res['ConsoleConfig'] = null !== $this->consoleConfig ? $this->consoleConfig->toArray($noStream) : $this->consoleConfig;
        }

        if (null !== $this->generalConfigMap) {
            if (\is_array($this->generalConfigMap)) {
                $res['GeneralConfigMap'] = [];
                foreach ($this->generalConfigMap as $key1 => $value1) {
                    $res['GeneralConfigMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->intelligentSearchConfig) {
            $res['IntelligentSearchConfig'] = null !== $this->intelligentSearchConfig ? $this->intelligentSearchConfig->toArray($noStream) : $this->intelligentSearchConfig;
        }

        if (null !== $this->miaosouConfig) {
            $res['MiaosouConfig'] = null !== $this->miaosouConfig ? $this->miaosouConfig->toArray($noStream) : $this->miaosouConfig;
        }

        if (null !== $this->searchSourceList) {
            if (\is_array($this->searchSourceList)) {
                $res['SearchSourceList'] = [];
                $n1 = 0;
                foreach ($this->searchSourceList as $item1) {
                    $res['SearchSourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchSources) {
            if (\is_array($this->searchSources)) {
                $res['SearchSources'] = [];
                $n1 = 0;
                foreach ($this->searchSources as $item1) {
                    $res['SearchSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->slrAuthorized) {
            $res['SlrAuthorized'] = $this->slrAuthorized;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
        }

        if (null !== $this->wanxiangImageSizeConfig) {
            if (\is_array($this->wanxiangImageSizeConfig)) {
                $res['WanxiangImageSizeConfig'] = [];
                $n1 = 0;
                foreach ($this->wanxiangImageSizeConfig as $item1) {
                    $res['WanxiangImageSizeConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wanxiangImageStyleConfig) {
            if (\is_array($this->wanxiangImageStyleConfig)) {
                $res['WanxiangImageStyleConfig'] = [];
                $n1 = 0;
                foreach ($this->wanxiangImageStyleConfig as $item1) {
                    $res['WanxiangImageStyleConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ChatConfig'])) {
            if (!empty($map['ChatConfig'])) {
                $model->chatConfig = [];
                foreach ($map['ChatConfig'] as $key1 => $value1) {
                    $model->chatConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['ConsoleConfig'])) {
            $model->consoleConfig = consoleConfig::fromMap($map['ConsoleConfig']);
        }

        if (isset($map['GeneralConfigMap'])) {
            if (!empty($map['GeneralConfigMap'])) {
                $model->generalConfigMap = [];
                foreach ($map['GeneralConfigMap'] as $key1 => $value1) {
                    $model->generalConfigMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['IntelligentSearchConfig'])) {
            $model->intelligentSearchConfig = intelligentSearchConfig::fromMap($map['IntelligentSearchConfig']);
        }

        if (isset($map['MiaosouConfig'])) {
            $model->miaosouConfig = miaosouConfig::fromMap($map['MiaosouConfig']);
        }

        if (isset($map['SearchSourceList'])) {
            if (!empty($map['SearchSourceList'])) {
                $model->searchSourceList = [];
                $n1 = 0;
                foreach ($map['SearchSourceList'] as $item1) {
                    $model->searchSourceList[$n1] = searchSourceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n1 = 0;
                foreach ($map['SearchSources'] as $item1) {
                    $model->searchSources[$n1] = searchSources::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['WanxiangImageSizeConfig'] as $item1) {
                    $model->wanxiangImageSizeConfig[$n1] = wanxiangImageSizeConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WanxiangImageStyleConfig'])) {
            if (!empty($map['WanxiangImageStyleConfig'])) {
                $model->wanxiangImageStyleConfig = [];
                $n1 = 0;
                foreach ($map['WanxiangImageStyleConfig'] as $item1) {
                    $model->wanxiangImageStyleConfig[$n1] = wanxiangImageStyleConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
