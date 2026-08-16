<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListModelTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string[]
     */
    public $agentPlatformList;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var string[]
     */
    public $agentProviderList;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var bool
     */
    public $hasModel;

    /**
     * @var string[]
     */
    public $modelTemplateIdList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $refScope;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentPlatformList' => 'AgentPlatformList',
        'agentProvider' => 'AgentProvider',
        'agentProviderList' => 'AgentProviderList',
        'bizType' => 'BizType',
        'hasModel' => 'HasModel',
        'modelTemplateIdList' => 'ModelTemplateIdList',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'refScope' => 'RefScope',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->agentPlatformList)) {
            Model::validateArray($this->agentPlatformList);
        }
        if (\is_array($this->agentProviderList)) {
            Model::validateArray($this->agentProviderList);
        }
        if (\is_array($this->modelTemplateIdList)) {
            Model::validateArray($this->modelTemplateIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentPlatformList) {
            if (\is_array($this->agentPlatformList)) {
                $res['AgentPlatformList'] = [];
                $n1 = 0;
                foreach ($this->agentPlatformList as $item1) {
                    $res['AgentPlatformList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->agentProviderList) {
            if (\is_array($this->agentProviderList)) {
                $res['AgentProviderList'] = [];
                $n1 = 0;
                foreach ($this->agentProviderList as $item1) {
                    $res['AgentProviderList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->hasModel) {
            $res['HasModel'] = $this->hasModel;
        }

        if (null !== $this->modelTemplateIdList) {
            if (\is_array($this->modelTemplateIdList)) {
                $res['ModelTemplateIdList'] = [];
                $n1 = 0;
                foreach ($this->modelTemplateIdList as $item1) {
                    $res['ModelTemplateIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->refScope) {
            $res['RefScope'] = $this->refScope;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentPlatformList'])) {
            if (!empty($map['AgentPlatformList'])) {
                $model->agentPlatformList = [];
                $n1 = 0;
                foreach ($map['AgentPlatformList'] as $item1) {
                    $model->agentPlatformList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['AgentProviderList'])) {
            if (!empty($map['AgentProviderList'])) {
                $model->agentProviderList = [];
                $n1 = 0;
                foreach ($map['AgentProviderList'] as $item1) {
                    $model->agentProviderList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['HasModel'])) {
            $model->hasModel = $map['HasModel'];
        }

        if (isset($map['ModelTemplateIdList'])) {
            if (!empty($map['ModelTemplateIdList'])) {
                $model->modelTemplateIdList = [];
                $n1 = 0;
                foreach ($map['ModelTemplateIdList'] as $item1) {
                    $model->modelTemplateIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RefScope'])) {
            $model->refScope = $map['RefScope'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
